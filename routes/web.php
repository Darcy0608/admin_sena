<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;

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

Route::get('/', function () {
    return view('welcome');
});


// Area
Route::get('/area/create', [AreaController::class, 'create']);
Route::post('/area/store', [AreaController::class, 'store'])->name('area.store');

// Computer
Route::get('/computer/create', [ComputerController::class, 'create']);
Route::post('/computer/store', [ComputerController::class, 'store'])->name('computer.store');

// Training_center
Route::get('/training_center/create', [Training_centerController::class, 'create']);
Route::post('/training_center/store', [Training_centerController::class, 'store'])->name('training_center.store');