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
            'user_type' => 
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

    public function paidItems() {
        return view('user.paid_items');
    }

    public function cart() {
        return view('user.cart');
    }

    public function search() {
        return view('user.search');
    }

    public function pendings() {
        return view('user.pendings');
    }


}