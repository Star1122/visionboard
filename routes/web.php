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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/socialite/{provider}', [
    'as' => 'socialite.redirectToProvider',
    'uses' => 'Auth\RegisterController@redirectToProvider'
]);

Route::get('/socialite/{provider}/callback', [
    'as' => 'socialite.handleCallback',
    'uses' => 'Auth\RegisterController@handleProviderCallback'
]);
