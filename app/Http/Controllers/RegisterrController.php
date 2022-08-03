<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
class RegisterrController extends Controller
{
    //
    public function _invoke(){
        return view('Auth.register');
    }

    public function register(Request $request){
        
        $validation=Validator::make($request->all(),[
             'name'=>'required',
             'avatar'=>'required',
             'email'=>'required',
             'password'=>'required'
        ]);
        if(!$validation->fails()){
            $user= new User();
            $user->name=$request->name;

            if($request->hasFile('avatar')){
                $avatar=$request->file('avatar')->store('public');
                $user->avatar=$avatar;
                $user->email=$request->email;
                $user->password=Hash::make($request->password);
                $user->save();
                Alert::success('usuarios Registrado');
                return redirect()->route('verLogin');
            }else{
                Alert::success('algo a malido sal');
                return $h='hola2';   
            }

        }
    }
}
