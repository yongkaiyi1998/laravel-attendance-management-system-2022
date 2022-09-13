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

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// credentials
Auth::routes();
Route::get('/student/login', [App\Http\Controllers\Auth\LoginController::class, 'showStudentLoginForm'])->name('student.signin');
Route::get('/teacher/login', [App\Http\Controllers\Auth\LoginController::class, 'showTeacherLoginForm'])->name('teacher.signin');
Route::get('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'showAdministratorLoginForm'])->name('administrator.signin');
Route::post('/student/login', [App\Http\Controllers\Auth\LoginController::class, 'studentLogin'])->name('student.login');
Route::post('/teacher/login', [App\Http\Controllers\Auth\LoginController::class, 'teacherLogin'])->name('teacher.login');
Route::post('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'administratorLogin'])->name('administrator.login');

// administrator
Route::prefix('admin')->group(function () {
    // student
    Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student.index');
    
    // teacher
    Route::get('/teacher', [App\Http\Controllers\TeacherController::class, 'index'])->name('teacher.index');

    // course
    Route::get('/course', [App\Http\Controllers\CourseController::class, 'index'])->name('course.index');

    // class
    Route::get('/classes', [App\Http\Controllers\ClassesController::class, 'index'])->name('classes.index');

    // attendance
    Route::get('/attendance', [App\Http\Controllers\AttendanceController::class, 'index'])->name('attendance.index');

    // account
    Route::get('/account', [App\Http\Controllers\UserController::class, 'index'])->name('account.index');

});