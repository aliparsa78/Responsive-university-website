<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    function index()
    {
        $user = Auth::user();
        if(!$user || $user->current_team_id==0){
            
            return view('Frontend/index');
        }else{
            return view('Backend/index');
        }
    }
}
