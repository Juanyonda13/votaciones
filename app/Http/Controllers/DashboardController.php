<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class DashboardController extends Controller
{
    //
    public function verDashboard()
    {
        $img=User::where('avatar','=',Auth()->user()->avatar);
        $name=User::where('name','=',Auth()->user()->name);  
        return view('layouts.dashboard',compact('img','name'));
    }
}
