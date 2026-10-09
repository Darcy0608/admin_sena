<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingEnvironmentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Area
Route::get('area/index', [AreaController::class, 'index'])->name('api.v1.area.index');
Route::post('area', [AreaController::class, 'store'])->name('api.v1.area.store');
Route::get('area/{area}', [AreaController::class, 'show'])->name('api.v1.area.show');
Route::put('area/{area}', [AreaController::class, 'update'])->name('api.v1.area.update');
Route::delete('area/{area}', [AreaController::class, 'destroy'])->name('api.v1.area.destroy');


// Computer
Route::get('computer/index', [ComputerController::class, 'index'])->name('api.v1.computer.index');
Route::post('computer', [ComputerController::class, 'store'])->name('api.v1.computer.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('api.v1.computer.show');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('api.v1.computer.update');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('api.v1.computer.destroy');

// Training Center
Route::get('training-center/index', [TrainingCenterController::class, 'index'])->name('api.v1.training-center.index');
Route::post('training-center', [TrainingCenterController::class, 'store'])->name('api.v1.training-center.store');
Route::get('training-center/{training-center}', [TrainingCenterController::class, 'show'])->name('api.v1.training_center.show');
Route::put('training-center/{training-center}', [TrainingCenterController::class, 'update'])->name('api.v1.training_center.update');
Route::delete('training-center/{training-center}', [TrainingCenterController::class, 'destroy'])->name('api.v1.training_center.destroy');

// Apprentice 
Route::get('apprentice/index', [ApprenticeController::class, 'index'])->name('api.v1.apprentice.index');
Route::post('apprentice', [ApprenticeController::class, 'store'])->name('api.v1.apprentice.store');
Route::get('apprentice/{apprentice}', [ApprenticeController::class, 'show'])->name('api.v1.apprentice.show');
Route::put('apprentice/{apprentice}', [ApprenticeController::class, 'update'])->name('api.v1.apprentice.update');
Route::delete('apprentice/{apprentice}', [ApprenticeController::class, 'destroy'])->name('api.v1.apprentice.destroy');

// Course 
Route::get('course/index', [CourseController::class, 'index'])->name('api.v1.course.index');
Route::post('course', [CourseController::class, 'store'])->name('api.v1.course.store');
Route::get('course/{course}', [CourseController::class, 'show'])->name('api.v1.course.show');
Route::put('course/{course}', [CourseController::class, 'update'])->name('api.v1.course.update');
Route::delete('course/{course}', [CourseController::class, 'destroy'])->name('api.v1.course.destroy');

// Teacher
Route::get('teacher/index', [TeacherController::class, 'index'])->name('api.v1.teacher.index');
Route::post('teacher', [TeacherController::class, 'store'])->name('api.v1.teacher.store');
Route::get('teacher/{teacher}', [TeacherController::class, 'show'])->name('api.v1.teacher.show');
Route::put('teacher/{teacher}', [TeacherController::class, 'update'])->name('api.v1.teacher.update');
Route::delete('teacher/{teacher}', [TeacherController::class, 'destroy'])->name('api.v1.teacher.destroy');


Route::get('training-environment/index', [TrainingEnvironmentController::class, 'index'])->name('api.v1.training-environment.index');
Route::post('training-environment', [TrainingEnvironmentController::class, 'store'])->name('api.v1.training-environment.store');
Route::get('training-environment/{training-environment}', [TrainingEnvironmentController::class, 'show'])->name('api.v1.training-environment.show');
Route::put('training-environment/{training-environment}', [TrainingEnvironmentController::class, 'update'])->name('api.v1.training-environment.update');
Route::delete('training-environment/{training-environment}', [TrainingEnvironmentController::class, 'destroy'])->name('api.v1.training-environment.destroy');



