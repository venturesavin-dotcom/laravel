<?php

use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExamResultsController;
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginForm'])-> name('login');
Route::post('/login', [AuthController::class, 'loginsumbit'])-> name('loginsumbit');
Route::post('/logout', [AuthController::class, 'logout'])-> name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])-> name('dashboard');

Route::resource('students', StudentController::class);

Route::resource('teachers', TeachersController::class);

Route::resource('courses', CoursesController::class);

Route::resource('exams', ExamsController::class);




// Route::get('/courses', [CoursesController::class, 'courses'])-> name('courses');
// Route::get('/attendence',[AttendenceController::class, 'attendence'])-> name('attendence');
// Route::get('/ExamResults',[ExamResultsController::class, 'ExamResults'])-> name('ExamResults');
// Route::get('/reports',[ReportsController::class, 'reports'])-> name('reports');
// Route::get('/settings',[SettingsController::class, 'settings'])-> name('settings');

