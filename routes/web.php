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
    return view('home');
})->name('home');
>>>>>>> fce256d629b83ab6f4b3783d0ea9c816c92b1fa2
