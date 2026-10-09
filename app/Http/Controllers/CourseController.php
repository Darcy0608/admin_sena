<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Training_center;
use App\Models\Area;

class CourseController extends Controller
{
    //Se obtienen todos los CURSOS de la tabla courses
    public function index(Request $request){
        // Si la petición viene desde el modal de busqueda de Administracion
    if ($request->filled('search')) {
        $search = trim($request->input('search'));

        // Busca coincidencia por el numero de curso/ficha (course_number) o jornada (day)
        $course = Course::where('course_number', 'LIKE', "%{$search}%")
                        ->orWhere('day', 'LIKE', "%{$search}%")
                        ->first();

        // Si encuentra el curso, redirige directo a la vista de detalle ('show')
        if ($course) {
            return response()->json($course);
            //return redirect()->route('course.show', $course->id);
        }

        // Si no encuentra registro, redirige a la lista general avisando
        return response()->json(['message' => 'No se encontró ningún curso o ficha con esa información']);
        //return redirect()->route('course.index')->with('warning', 'No se encontró ningún curso o ficha con esa información.');
    }

    // Carga normal del listado con sus relaciones optimizadas (area y centro)
    $courses = Course::with(['area', 'trainingCenter'])->get(); 
    return response()->json($courses);
    //return view('course.index', compact('courses'));


    // Carga habitual de cursos
    //$courses = Course::all();
    //return view('course.index', compact('courses'));
}


    
    // Devuelve todas las AREAS y todos los CENTROS DE FORMACION para llenar los select del formulario
    public function create(){

        $areas = Area::all();
        $training_centers = Training_center::all();

        return view('course.create', compact('areas', 'training_centers'));
    }



    //Guardar un NUEVO CURSO
    public function store(Request $request){

        $course = Course::create($request->all());
        return response()->json(['message' => '¡Curso creado con éxito!', 'course' => $course]);
        //return redirect()->route('course.index');
    }



    // Mostrar un SOLO CURSO
    public function show(int $id){

        // Cargamos el curso junto con su area y su centro de formación
        $course = Course::with(['area', 'TrainingCenter'])->findOrFail($id);
        
        return response()->json($course);
        //return view('course.show', compact('course'));
    }



    //Obtener un curso especifico para mostrarlo en el formulario editar
    public function edit(Course $course){
    //Encuentro el Curso
    return response()->json($course);
    
    //return view('course.edit', compact('course'));
    }



    //Modificar un curso existente
    public function update(Request $request, Course $course){

        $course->course_number = $request->course_number;
        $course->day = $request->day;
        $course->area_id = $request->area_id;
        $course->training_center_id = $request->training_center_id;
        $course->save();

        return response()->json(['message' => '¡Curso actualizado correctamente!', 'course' => $course]);
        //return redirect()->route('course.index');
    }


    // Destroy eliminar un curso
    public function destroy(Course $course){

        $course->delete();

        return response()->json(['message' => '¡Curso eliminado correctamente!']);
        //return redirect()->route('course.index');
    }
 }