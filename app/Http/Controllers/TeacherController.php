<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher; 
use App\Models\Area; 
use App\Models\Training_center; 

class TeacherController extends Controller
{
    public function index(Request $request){
        if ($request->filled('search')) {
        $search = trim($request->input('search'));

        // Realiza la búsqueda flexible por nombre, email o cualquier campo identificador
        $teacher = Teacher::where('name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->first();

        // Si existe coincidencia, te envía directo a la vista de detalle (show)
        if ($teacher) {
            return response()->json($teacher);    
            //return redirect()->route('teacher.show', $teacher->id);
        }

        // Si no encuentra registro, redirige a la tabla avisando
        return response()->json(['message' => 'No se encontró ningún instructor con esa información']);
        
        //return redirect()->route('teacher.index')->with('warning', 'No se encontró ningún instructor con esa información.');
    }

    // Carga todos los instructores
    $teachers = Teacher::all(); 

    // Retorna los instructores en formato JSON
    return response()->json($teachers);
}



    public function create(){

        $training_centers = Training_center::all();
        $areas = Area::all();

        return view('teacher.create', compact('training_centers', 'areas'));
    }



    public function store(Request $request)
{
    // Validar los datos recibidos
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'area_id' => 'required|integer|exists:areas,id',
        'training_center_id' => 'required|integer|exists:training_centers,id',
    ]);

    // Crear el instructor con los datos validados
    $teacher = Teacher::create($validated);

    // Retornar la respuesta en formato JSON
    return response()->json([
        'message' => '¡Instructor/a creado con éxito!',
        'teacher' => $teacher
    ]);
}



    public function show( int $id){

    // Cargamos el instructor junto con su área y su centro de formación
    $teacher = Teacher::with(['area', 'trainingCenter'])->findOrFail($id);

    return response()->json($teacher);
    //return view('teacher.show', compact('teacher'));
    }



    public function edit(Teacher $teacher){

    $training_centers = Training_center::all();
    $areas = Area::all();

    //Encuentro el Instructor
    return response()->json(['teacher' => $teacher, 'training_centers' => $training_centers, 'areas' => $areas]);
    //return view('teacher.edit', compact('teacher'));
    }



    public function update(Request $request, Teacher $teacher){

        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->area_id = $request->area_id;
        $teacher->training_center_id = $request->training_center_id;
        $teacher->save();

        return response()->json(['message' => '¡Instructor/a actualizado correctamente!', 'teacher' => $teacher]);
        //return redirect()->route('teacher.index');
    }


    
    public function destroy(Teacher $teacher){

        $teacher->delete();

        return response()->json(['message' => 'Instructor/a eliminado correctamente']);
        //return redirect()->route('teacher.index');
    }
 }