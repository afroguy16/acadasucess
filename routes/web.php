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
    return view('home');
});

Route::get('/details', 'MemberController@index');

Route::get('auth/{facebook}', 'Auth\SocialiteController@redirectToProvider');
Route::get('auth/{facebook}/callback', 'Auth\SocialiteController@handleProviderCallback');

Route::get('auth/{github}', 'Auth\SocialiteController@redirectToProvider');
Route::get('auth/{github}/callback', 'Auth\SocialiteController@handleProviderCallback');

Route::get('auth/{twitter}', 'Auth\SocialiteController@redirectToProvider');
Route::get('auth/{twitter}/callback', 'Auth\SocialiteController@handleProviderCallback');
Auth::routes();

Route::get('/home', 'HomeController@index');
