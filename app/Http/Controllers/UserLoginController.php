<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\Users;

use DB;
use Illuminate\Support\Str;
use Hash;


class UserLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function home()
    // {
    //     return view('landingPage');
    // }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(UserLoginRequest $request){
        
        //if retrieved as a user
        if(Auth::guard('user')->attempt(['username'=>$request->username,'password'=>$request->password]))
        {
            return redirect()->route('users.home');
        }

        //if retrieved as an admin
        else if(Auth::guard('admin')->attempt(['username'=>$request->username,'password'=>$request->password]))
        {
            return redirect()->route('admin.home');
        }

        //if account do not exist
        if(! Users::where([['username',$request->username], ['password', $request->password]])){
            return redirect()->back()
            ->withInput($request->only('username'))
            ->withErrors('Error', 'Invalid credentials!');
        }
    }


    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(UserRegisterRequest $request)
    {
        DB::beginTransaction();
        try{
            $token = Str::random(60);
            $user = Users::create([
                'name' => $request['name'],
                'username' => $request['username'],
                'email' => $request['email'],
                'gender' => $request['gender'],
                'password' => Hash::make($request['password']),
                'api_token' => Str::random(60),
            ]);
            // dd($request);
            $user->save();
            DB::commit();
            return redirect('/login')->with('success', "Registered successfully!");
        } catch(\Exception $e){
            DB::rollback();
            return redirect()->back()->withInput()->withErrors('error', 'Error registering!');
        }
    }

    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect('/');
    }


}
