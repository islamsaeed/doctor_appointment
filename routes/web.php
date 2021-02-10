<?php

use Illuminate\Support\Facades\Route;

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

Route::get('admin/login', function () {
    return view('auth.login');
});

Auth::routes(['register' => false]);
// Route::get('/home', 'HomeController@index')->name('home');
//forget password
Route::get('forgot/password', 'AdminController@forgot_password');
Route::post('forgot/password', 'AdminController@forgot_password_Post')->name('forgot.password.Post');
Route::get('reset/password/{token}', 'AdminController@reset_password')->name('reset.password.final');
//reset password
Route::post('reset/password/{token}', 'AdminController@reset_password_final');

Route::get('admin', function () {
    return view('admin.index');
});

//Route::get('/{page}', 'AdminController@index');
