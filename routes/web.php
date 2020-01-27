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

Route::get('/', function () {
    return view('hello');
});

Route::get('/register', 'pageController@register')->name('signup');

Route::post('/register', 'usersController@register')->name("user.register");

Route::get('/home', function () {
    return view('user.home');
})->name('user_home');

Route::get('/profile', function() {
    return view('user.profile');
})->name('user_profile');
///hi ahahah ar you
Route::get('/profiletest', function() {
    return view('user.profile');
})->name('user_profilesss');