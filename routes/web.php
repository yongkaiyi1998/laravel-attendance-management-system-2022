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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// credentials
Auth::routes();
Route::get('/student/login', [App\Http\Controllers\Auth\LoginController::class, 'showStudentLoginForm'])->name('student.signin');
Route::get('/teacher/login', [App\Http\Controllers\Auth\LoginController::class, 'showTeacherLoginForm'])->name('teacher.signin');
Route::get('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'showAdministratorLoginForm'])->name('administrator.signin');
Route::post('/student/login', [App\Http\Controllers\Auth\LoginController::class, 'studentLogin'])->name('student.login');
Route::post('/teacher/login', [App\Http\Controllers\Auth\LoginController::class, 'teacherLogin'])->name('teacher.login');
Route::post('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'administratorLogin'])->name('administrator.login');