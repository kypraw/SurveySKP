<?php

namespace App\Http\Controllers;

use Adldap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    protected $loginPath = '/';

    public function getLogin(){
        return view('login');
    }
    
    public function postLogin(Request $request){
        $username = $request['username'];
        $password = $request['password'];
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
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
}