<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function register(){
        return view('register');
    }
    
    public function loginForm(){
        return view('login');
    }
}
