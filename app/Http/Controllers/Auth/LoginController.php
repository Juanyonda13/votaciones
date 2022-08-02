<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class LoginController extends Controller
{
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
