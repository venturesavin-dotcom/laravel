<?php

use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExamResultsController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginForm'])-> name('login');
Route::post('/login', [AuthController::class, 'loginsumbit'])-> name('loginsumbit');
Route::post('/logout', [AuthController::class, 'logout'])-> name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])-> name('dashboard');
Route::get('/courses', [CoursesController::class, 'courses'])-> name('courses');
Route::get('/students',[StudentsController::class, 'students'])-> name('students');
Route::get('/attendence',[AttendenceController::class, 'attendence'])-> name('attendence');
Route::get('/ExamResults',[ExamResultsController::class, 'ExamResults'])-> name('ExamResults');
Route::get('/reports',[ReportsController::class, 'reports'])-> name('reports');
Route::get('/settings',[SettingsController::class, 'settings'])-> name('settings');

