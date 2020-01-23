<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class usersController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'name' => 
                [
                    'required',
                    'min:5'
                ],
            'username' => 
                [
                    'required',
                    'unique:users,username',
                    'min:5'
                ],
            'email' => 
                [
                    'required',
                    'email',
                    'unique:users,email'
                ],
            'gender' => 
                [
                    'required'
                ], 
            'password' => 
                [
                    'required',
                    'confirmed',
                    'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/'
                ]
        ]);
        
        $user = new users([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'gender' => $request['gender'],
            'user_type' => $request['user_type'],
            'password' => $request['password']
        ]);

        $user->save();

        return view('login');
    }

}
