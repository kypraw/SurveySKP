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
}