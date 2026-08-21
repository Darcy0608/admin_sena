<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Training_center;
use App\Models\Area;

class CourseController extends Controller
{
    //Se obtienen todos los CURSOS de la tabla courses
    public function index(){
        $courses=Course::with(['area', 'training_center'])->get();
        
        return view('course.index', compact('courses'));
    }


    
    //Devuelve todas las AREAS y todos los CENTROS DE FORMACION para llenar los select del formulario
    public function create(){

        $training_centers = Training_center::all();
        $areas = Area::all();

        return view('course.create', compact('training_centers', 'areas'));
    }



    //Guardar un NUEVO CURSO
    public function store(Request $request){

        $course = Course::create($request->all());

        return redirect()->route('course.index');
    }



    // Mostrar un SOLO CURSO
    public function show(Course $course){
    //$course = Course::find($id);
    return view('course.show', compact('course'));
    }



    //Obtener un curso especifico para mostrarlo en el formulario editar
    public function edit(Course $course){
    //Encuentro el Curso
    return view('course.edit', compact('course'));
    }



    //Modificar un curso existente
    public function update(Request $request, Course $course){

        $course->course_number = $request->course_number;
        $course->day = $request->day;
        $course->area_id = $request->area_id;
        $course->training_center_id = $request->training_center_id;
        $course->save();

        return redirect()->route('course.index');
    }


    // Destroy eliminar un curso
    public function destroy(Course $course){

        $course->delete();

        return redirect()->route('course.index');
    }
}
