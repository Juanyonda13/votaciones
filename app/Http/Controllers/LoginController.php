<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function verLogin(){
        return view('Auth.login');
    }
    public function Login(){
        $user=User::where($request->email);
        if(Hash::check($request->password,$user->password))
        {
           $token=$user->createToken('auth_token')->plainTexToken;
           Alert::succsess('inicio de sesion correcto');
           return view('home');
        }
        else{
         Alert::succsess('inicio de sesion incorrecto');
         return redirect()->route('login.index');
        }
    }
    public function logout(){
        User()->Tokens()->delete();
    }
}
