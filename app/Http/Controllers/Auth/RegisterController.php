<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;


class RegisterController extends Controller
{
    public function _invoke(){
        return view('Auth.register');
    }

    public function Register(Request $request){
        
        $validation=Validator::make($request->all(),[
             'name'=>'required',
             'avatar'=>'required',
             'email'=>'required',
             'password'=>'required|confirmed'
        ]);
        if(!$validation->fail()){
            $user= new User();
            $user->name=$request->name;
            if($request->hasFile('avatar')){
                $avatar=$request->file('avatar')->store('img','public');
                $user->email=$request->email;
                $user->password=Hash::make($request->password);
                $user->save();
                Alert::success('usuarios Registrado');
                return redirec()->route('home');
            }else{
                Alert::success('algo a malido sal');
                return redirec()->route('register.register');   
            }
        }
    }
}
