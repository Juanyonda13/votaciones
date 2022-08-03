<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use File;
use App\Models\User;
class DashboardController extends Controller
{
    //
    public function verDashboard()
    { 
        if(Auth:: user()){
            $user=Auth()->user();
            return view('layouts.dashboard',compact('user'));
           } 
           else{
            return redirect()->route('verLogin');
           }
        

        // return $img;
    
 
    }
}
?>
