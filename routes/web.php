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
    return view('welcome');
});
Route::get('login', function () {
    return redirect('home');
})->name('login');
Route::get("home",array("as"=>"home","uses"=>function(){
    return view("home");
}));

Route::get('auth/twitter', 'Auth\AuthController@redirectToProvider')->name('auth-twitter');
Route::get('auth/twitter/callback', 'Auth\AuthController@handleProviderCallback');
Route::get("auth/twitter/logout","Auth\AuthController@getLogout");

Route::get("list/anagram","ListController@anagram");

Route::group(['middleware' => 'auth'], function () {
    Route::resource('anagram', 'AnagramController');
});  