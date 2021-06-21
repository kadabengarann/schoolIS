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

Route::get('/', function () {
    return view('v_home');
});

Route::view('/students', 'admin.student.v_students');
Route::view('/students/add', 'admin.student.v_add_student');
Route::view('/teachers', 'admin.teacher.v_teachers');
Route::view('/teachers/add', 'admin.teacher.v_add_teacher');
Route::view('/admins', 'admin.manage.admin.v_admins');
Route::view('/admins/add', 'admin.manage.admin.v_manage_admin');
Route::view('/users', 'admin.manage.user.v_users');
Route::view('/users/add', 'admin.manage.user.v_manage_users');
