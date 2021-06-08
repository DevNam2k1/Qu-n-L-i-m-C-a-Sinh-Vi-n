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


//Admin
Route::get('/','AdminController@login');
Route::get('/login','AdminController@login');
Route::get('/dashboard', 'AdminController@dashboard');
//Login and logout admin
Route::get('/logout-admin', 'AdminController@logout_admin');
Route::post('/login-admin', 'AdminController@login_admin');

