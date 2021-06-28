<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['middleware'=>'admin'], function () {

    Route::get('/teachers', [TeachersController::class, 'index'])->name('teachers');
    Route::get('/teachers/add', [TeachersController::class, 'add']);
    Route::post('/teacher/insert', [TeachersController::class, 'insert']);
    Route::get('/teachers/detail/{id}', [TeachersController::class, 'detail'])->name('teacherDetail');
    Route::get('/teachers/edit/{id}', [TeachersController::class, 'edit']);
    Route::post('/teacher/update/{id}', [TeachersController::class, 'update']);
    Route::get('/teacher/delete/{id}', [TeachersController::class, 'delete']);


    Route::get('/students', [StudentsController::class, 'index'])->name('students');
    Route::get('/students/add', [StudentsController::class, 'add']);
    Route::post('/student/insert', [StudentsController::class, 'insert']);
    Route::get('/students/detail/{id}', [StudentsController::class, 'detail'])->name('studentDetail');
    Route::get('/students/edit/{id}', [StudentsController::class, 'edit']);
    Route::post('/student/update/{id}', [StudentsController::class, 'update']);
    Route::get('/student/delete/{id}', [StudentsController::class, 'delete']);

    Route::view('/admins', 'admin.manage.admin.v_admins');
    Route::view('/admins/add', 'admin.manage.admin.v_manage_admin');
    Route::view('/users', 'admin.manage.user.v_users');
    Route::view('/users/add', 'admin.manage.user.v_manage_users');
});
Route::group(['middleware'=>'user'], function () {
    Route::get('user/profile', [UserController::class, 'biodata']);
    Route::get('user/schedule', [UserController::class, 'jadwal']);
            
});