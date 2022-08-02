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
    //
    public function verLogin(){
        return view('Auth.login');
    }
    public function Login(Request $request){
        $user=User::where('email','=',$request->email)->first();
        if(Hash::check($request->password,$user->password))
        {
            $credenciales=[
                'email'=>$request->email,
                'password'=>$request->password
            ];
            //return $perdonProfe;
           $token=$user->createToken('auth_token')->plainTextToken;
           if(Auth::attempt($credenciales)){
                //    return redirect()->route();
                return $hopa='asas';
           }else{
                 return $h='no';
           }

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
