<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
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
Route::get('/students', [StudentsController::class, 'index']);
Route::get('/students/add', [StudentsController::class, 'add_page']);
Route::get('/teachers', [TeachersController::class, 'index']);
Route::get('/teachers/add', [TeachersController::class, 'add_page']);


Route::view('/admins', 'admin.manage.admin.v_admins');
Route::view('/admins/add', 'admin.manage.admin.v_manage_admin');
Route::view('/users', 'admin.manage.user.v_users');
Route::view('/users/add', 'admin.manage.user.v_manage_users');
