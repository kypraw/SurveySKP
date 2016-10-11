<?php

namespace App\Http\Controllers;

use Adldap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class AuthController extends Controller
{
    protected $loginPath = '/';

    public function getLogin(){
        return view('login');
    }
    
    public function postLogin(Request $request){
        

        $email = $request['email'];
        $user = explode('@', $email);
        if(!($user[1] == 'kemenkeu.go.id')){
            return redirect()->back();
        }
        $username = $user[0];
        $password = $request['password'];
        
        if (Adldap::auth()->attempt($username, $password )){
            
            if(Auth::attempt(['username' => $username, 'password' => $password])){
                
                return redirect()->route('surveys');

            } elseif(!Auth::attempt(['username' => $username, 'password' => $password])){
                //jika user ganti password AD
                $userExist = User::where('username',$username)->first();
                
                if($userExist){
                    $userExist->password = bcrypt($password);
                    $userExist->update();
                } else {
                    $user = new User();
                    $user->username = $username;
                    $user->email = $email;
                    $user->password = bcrypt($password) ;
                    $user->save();
                }

                Auth::attempt(['username' => $username, 'password' => $password]);
                return redirect()->route('surveys'); 
                
            }
            
        } else {
            return redirect()->route('login');
        }

        /* tidak memperhitungkan pergantian password
        if(!Auth::attempt(['username' => $username, 'password' => $password])){
            if (Adldap::auth()->attempt($username, $password )) {
                $user = new User();
                $user->username = $username;
                $user->password = bcrypt($password) ;
                $user->save();
                //login setelah save di db lokal
                Auth::attempt(['username' => $username, 'password' => $password]);
                return redirect()->route('surveys');
            } else {
                //jika ldap juga salah, return ke login page
                return redirect()->route('login');
            }
        } else {
            return redirect()->route('surveys');
        }
        */
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('login');
    }

    /*test ldap
    public function getAdldap(Request $request){
        $email = $request['email'];
        $user = explode('@', $email);
        if(!($user[1] == 'kemenkeu.go.id')){
            return redirect()->back();
        }
        $username = $user[0];
        $password = $request['password'];

        $adServer = "kemenkeu.go.id";
        $ldap = ldap_connect($adServer);
        ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

        $ldaprdn = 'kemenkeu' . "\\" . $username;
        $bind = @ldap_bind($ldap, $ldaprdn, $password);

        $filter = "(samaccountname=rizkyprawira)";
        $result = ldap_search($ldap,"ou=Pusat Sistem Informasi dan Teknologi Keuangan,ou=kemenkeu,dc=kemenkeu,dc=go,dc=id",
        $filter) or die ("Error : ".ldap_error($bind));
        $info=ldap_get_entries($ldap, $result);
        for ($i=0; $i<$info["count"]; $i++)
        {
            if($info['count'] > 1)
                break;
            echo "<p>You are accessing <strong> ". $info[$i]["sn"][0] .", " . $info[$i]["givenname"][0] ."</strong><br /> (" . $info[$i]["samaccountname"][0] .")</p>\n";
            echo '<pre>';
            var_dump($info);
            echo '</pre>';
            $userDn = $info[$i]["distinguishedname"][0]; 
        }
        @ldap_close($ldap);
    }
    */
}