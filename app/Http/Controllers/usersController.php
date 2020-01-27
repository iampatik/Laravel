<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use DB;

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
                    'min:8',
                    'confirmed'
                ]
        ]);
        
        DB::beginTransaction();
        try {
            $user = new Users([
                'name' => $request['name'],
                'username' => $request['username'],
                'email' => $request['email'],
                'gender' => $request['gender'],
                'password' => $request['password']
            ]);
    
            $user->save();
            DB::commit();
            return redirect('login')->with('registered', 'Registered successfully');
        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->withErrors('failed', 'Failed to register');
        }
    }
    
    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        try {
            $user = Users::whereUsername($request['username'])->get();
            
            if ($user[0]['password'] == $request['password']) {
                return redirect('home')->with('success', 'Successful login');
            } else {
                return redirect()->back()->withInput()->withErrors('failed', 'Failed to login');
            }
        }
        catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors('failed', 'Failed to login');
        }
        // return redirect('home');
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
    public function logout() {
        return redirect('login')->with('logout', "successful logout");
    }

}