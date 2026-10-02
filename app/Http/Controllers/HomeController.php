<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Apprentice;
use App\Models\Teacher;

class HomeController extends Controller
{
    public function index()
    {
        // Contamos los registros almacenados en la base de datos
        $totalCourses = Course::count();
        $totalApprentices = Apprentice::count();
        $totalTeachers = Teacher::count();

        // Enviamos las variables a la vista 'home'
        return view('home', compact('totalCourses', 'totalApprentices', 'totalTeachers'));
    }
}
