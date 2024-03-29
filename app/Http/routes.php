<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Auth;

Route::get('/', function ($username, $password) {
    // if(Auth::check()) {
    //     return 'The user is login';
    // }
    // return view('welcome');

    if(Auth::attempt(['username'=> $username, 'password'=> $password])) {
        return redirect()->intended('/admin');
    }
});

Route::auth();

Route::get('/home', 'HomeController@index');
