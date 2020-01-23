<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

<<<<<<< HEAD
Route::get('/', function () {
    return view('hello');
});

Route::get('/register', 'pageController@register');

Route::post('/register', 'usersController@register')->name("user.register");
=======
Route::get('/home', function () {
<<<<<<< HEAD
    return view('user.home');
})->name('user_home');

Route::get('/profile', function() {
    return view('user.profile');
})->name('user_profile');
=======
    return view('home');
})->name('home');
>>>>>>> fce256d629b83ab6f4b3783d0ea9c816c92b1fa2
>>>>>>> b7f55708b4fe6c24e8f32fb4969f22eaf7d0497b
