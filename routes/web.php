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

Route::get('/resetpassword', function () {
    return view('resetpassword');
});

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/manageuser', function () {
    //return view('manageuser');
//});

Route::get('/cryptoexchange', function () {
    return view('cryptoexchange');
});

Route::get('/setting', function () {
    return view('setting');
});




Auth::routes();
Route::group(['middleware' => ['auth']], function() {
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/manageuser', 'ManageUserController@manage')->name('manageuser');

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@updateAvatar');
});

