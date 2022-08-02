<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

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
}
