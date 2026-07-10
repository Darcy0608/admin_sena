<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// Area
Route::get('area/create', [AreaController::class, 'create']);
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');
Route::get('area/index',[AreaController::class,'index'])->name('area.index');
Route::get('area/show/{id}', [AreaController::class, 'show'])->name('area.show');

// Computer
Route::get('computer/create', [ComputerController::class, 'create']);
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/index',[ComputerController::class,'index'])->name('computer.index');
Route::get('computer/show/{id}', [ComputerController::class, 'show'])->name('computer.show');

// Training_center
Route::get('training_center/create', [TrainingCenterController::class, 'create']);
Route::post('training_center/store', [TrainingCenterController::class, 'store'])->name('training_center.store');
Route::get('training_center/index',[TrainingCenterController::class,'index'])->name('training_center.index');
Route::get('training_center/show/{id}', [TrainingCenterController::class, 'show'])->name('training_center.show');

// Couse
Route::get('course/create', [CourseController::class, 'create']);
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('course/index',[CourseController::class,'index'])->name('course.index');
Route::get('course/show/{id}', [CourseController::class, 'show'])->name('course.show');

// Apprentice
Route::get('apprentice/create', [ApprenticeController::class, 'create']);
Route::post('apprentice/store', [ApprenticeController::class, 'store'])->name('apprentice.store');
Route::get('apprentice/index',[ApprenticeController::class,'index'])->name('apprentice.index');
Route::get('apprentice/show/{id}',[ApprenticeController::class,'show'])->name('apprentice.show');

// Teacher
Route::get('teacher/create', [TeacherController::class, 'create']);
Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teacher/index',[TeacherController::class,'index'])->name('teacher.index');
Route::get('teacher/show/{id}', [TeacherController::class, 'show'])->name('teacher.show');
