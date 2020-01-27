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

Route::get('/login', 'pageController@loginForm')->name('user.loginForm');

Route::post('/login', 'usersController@login')->name('user.login');

Route::get('/register', 'pageController@register')->name('signup');

Route::post('/register', 'usersController@register')->name("user.register");

Route::get('/logout', 'usersController@logout')->name("user.logout");

Route::get('/paiditems', 'usersController@paidItems')->name("user_paid_items");

Route::get('/cart', 'usersController@cart')->name("user_cart");

Route::get('/pendings', 'usersController@pendings')->name("user_pendings");

Route::get('/search', 'usersController@search')->name("user_search");

Route::get('/home', function () {
    return view('user.home');
})->name('user_home');

Route::get('/profile', function() {
    return view('user.profile');
})->name('user_profile');
