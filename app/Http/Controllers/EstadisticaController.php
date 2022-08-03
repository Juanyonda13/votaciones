<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstadisticaController extends Controller
{
    public function chart(){
        $users=User::all();
        $data=[];
        foreach($users as $user){
             $data['label'][]=$user->name;
             $data['data'][]=$user->timestamps;
        }
        $data ['data']= json_encode($data);
        return view('estadisticas',$data);
    }


    public function index(){
       if(Auth::user()){
        return view('home');
       } 
       else{
        return redirect()->route('verLogin');
       }
        
    }




}
