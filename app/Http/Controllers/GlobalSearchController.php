<?php

namespace App\Http\Controllers;

// Importamos nuestros modelos
use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;
use App\Models\Teacher;
use App\Models\Area;
use App\Models\Training_center;

class GlobalSearchController extends Controller
{
    public function search(Request $request)
    {
        $query = trim($request->input('query'));

        if (empty($query)) {
            return response()->json(['message' => 'Debes ingresar un término de búsqueda']);
            //return back();
        }

        // Buscamos Aprendices
        $apprentices = Apprentice::with(['course', 'computer'])
            ->where('name', 'LIKE', "%{$query}%")
            ->orWhere('Identity_card', 'LIKE', "%{$query}%")
            ->orWhere('email', 'LIKE', "%{$query}%")
            ->get();

        // Buscamos Cursos
        $courses = Course::where('course_number', 'LIKE', "%{$query}%")
            ->get();

        // Buscamos Computadores
        $computers = Computer::where('number', 'LIKE', "%{$query}%")
            ->orWhere('brand', 'LIKE', "%{$query}%")
            ->get();

        // Buscamos Instructores (Cargamos el área y el centro de formación)
        $teachers = Teacher::with(['area', 'trainingCenter'])
            ->where('name', 'LIKE', "%{$query}%")
            ->orWhere('email', 'LIKE', "%{$query}%")
            ->get();

        // Buscamos Áreas
        $areas = Area::where('name', 'LIKE', "%{$query}%")->get();

        // Buscamos Centros de Formación usando tu modelo Training_center
        $trainingCenters = Training_center::where('name', 'LIKE', "%{$query}%")->get();

        // Pasamos $trainingCenters en el compact para que coincida con $trainingCenters de tu vista search/results.blade.php
        return response()->json([
            'query' => $query,
            'apprentices' => $apprentices,
            'courses' => $courses,
            'computers' => $computers,
            'teachers' => $teachers,
            'areas' => $areas,
            'trainingCenters' => $trainingCenters
        ]);
        
        /*
        return view('search.results', compact(
            'query',
            'apprentices',
            'courses',
            'computers',
            'teachers',
            'areas',
            'trainingCenters'
        ));
        */
    }
}
