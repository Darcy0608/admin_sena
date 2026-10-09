<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingEnvironmentController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\GlobalSearchController;

use App\Http\Controllers\AuthController;



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
Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');
Route::get('area/index',[AreaController::class,'index'])->name('area.index');
Route::get('area/show/{area}', [AreaController::class, 'show'])->name('area.show');
Route::put('area/{area}',[AreaController::class,'update'])->name('area.update');
Route::delete('area/{area}',[AreaController::class,'destroy'])->name('area.destroy');
Route::get('area/{area}/editar',[AreaController::class,'edit'])->name('area.edit');


// Computer
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/index',[ComputerController::class,'index'])->name('computer.index');
Route::get('computer/show/{computer}', [ComputerController::class, 'show'])->name('computer.show');
Route::put('computer/{computer}',[ComputerController::class,'update'])->name('computer.update');
Route::delete('computer/{computer}',[ComputerController::class,'destroy'])->name('computer.destroy');
Route::get('computer/{computer}/editar',[ComputerController::class,'edit'])->name('computer.edit');


// Training_center
Route::get('training-center/create', [TrainingCenterController::class, 'create'])->name('training-center.create');
Route::post('training-center/store', [TrainingCenterController::class, 'store'])->name('training-center.store');
Route::get('training-center/index',[TrainingCenterController::class,'index'])->name('training-center.index');
Route::get('training-center/show/{training_center}', [TrainingCenterController::class, 'show'])->name('training-center.show');
Route::put('training-center/{training_center}',[TrainingCenterController::class,'update'])->name('training-center.update');
Route::delete('training-center/{training_center}',[TrainingCenterController::class,'destroy'])->name('training-center.destroy');
Route::get('training-center/{training_center}/editar',[TrainingCenterController::class,'edit'])->name('training-center.edit');


// Training_environment (Ambientes)
Route::get('training_environment/create', [TrainingEnvironmentController::class, 'create'])->name('training_environment.create');
Route::post('training_environment/store', [TrainingEnvironmentController::class, 'store'])->name('training_environment.store');
Route::get('training_environment/index', [TrainingEnvironmentController::class, 'index'])->name('training_environment.index');
Route::get('training_environment/show/{training_environment}', [TrainingEnvironmentController::class, 'show'])->name('training_environment.show');
Route::put('training_environment/{training_environment}', [TrainingEnvironmentController::class, 'update'])->name('training_environment.update');
Route::delete('training_environment/{training_environment}', [TrainingEnvironmentController::class, 'destroy'])->name('training_environment.destroy');
Route::get('training_environment/{training_environment}/editar', [TrainingEnvironmentController::class, 'edit'])->name('training_environment.edit');

// Course
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('course/index',[CourseController::class,'index'])->name('course.index');
Route::get('course/show/{course}', [CourseController::class, 'show'])->name('course.show');
Route::put('course/{course}',[CourseController::class,'update'])->name('course.update');
Route::delete('course/{course}',[CourseController::class,'destroy'])->name('course.destroy');
Route::get('course/{course}/editar',[CourseController::class,'edit'])->name('course.edit');


// Apprentice
Route::get('apprentice/create', [ApprenticeController::class, 'create'])->name('apprentice.create');
Route::post('apprentice/store', [ApprenticeController::class, 'store'])->name('apprentice.store');
Route::get('apprentice/index',[ApprenticeController::class,'index'])->name('apprentice.index');
Route::get('apprentice/show/{apprentice}',[ApprenticeController::class,'show'])->name('apprentice.show');
Route::put('apprentice/{apprentice}',[ApprenticeController::class,'update'])->name('apprentice.update');
Route::delete('apprentice/{apprentice}',[ApprenticeController::class,'destroy'])->name('apprentice.destroy');
Route::get('apprentice/{apprentice}/editar',[ApprenticeController::class,'edit'])->name('apprentice.edit');


// Teacher
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teacher/index',[TeacherController::class,'index'])->name('teacher.index');
Route::get('teacher/show/{teacher}', [TeacherController::class, 'show'])->name('teacher.show');
Route::put('teacher/{teacher}',[TeacherController::class,'update'])->name('teacher.update');
Route::delete('teacher/{teacher}',[TeacherController::class,'destroy'])->name('teacher.destroy');
Route::get('teacher/{teacher}/editar',[TeacherController::class,'edit'])->name('teacher.edit');


//  Home
Route::get('/', [HomeController::class, 'index'])->name('home');
// Búsqueda global del sistema
Route::get('/buscar', [GlobalSearchController::class, 'search'])->name('global.search');


// Rutas de inicio de sesión
// Muestra el formulario de inicio de sesion
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
//Ruta para procesar las credenciales que el usuario envia desde el formulario
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
//Cierra la sesión del usuario actual
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas de registro
// Muestra el formulario de registro
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
// Procesa y guarda el nuevo usuario en la base de datos
Route::post('/register', [AuthController::class, 'register'])->name('register.post');




