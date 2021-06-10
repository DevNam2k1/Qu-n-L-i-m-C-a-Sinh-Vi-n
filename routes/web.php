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
//Quản lý điểm
Route::get('/add-point','PointController@add_point');
Route::get('/score-list','PointController@score_list');
//Quản lý Sinh viên
Route::get('/add-student','StudentController@add_student');
Route::get('/student-list','StudentController@student_list');
//Quản lý Giảng Viên
Route::get('/add-lecturers','TeacherController@add_lecturers');
Route::get('/lecturers-list','TeacherController@lecturers_list');
Route::get('/edit-lecturers/{lecturers_id}','TeacherController@edit_lecturers');
Route::get('/delete-lecturers/{lecturers_id}','TeacherController@delete_lecturers');

Route::post('/save-lecturers','TeacherController@save_lecturers');
Route::post('/update-lecturers/{lecturers_id}','TeacherController@update_lecturers');