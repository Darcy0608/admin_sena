<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    //Mostramos el listado de todos los centros de formación
    public function index()
    {
        // Consultamos todos los registros de training_centers
        $training_centers = Training_center::all();

        // Retoramos la vista index y le pasamos la variable con los dato
        return response()->json($training_centers);
        
        //return view('training-center.index', compact('training_centers'));
    }



    // Mostramos el formulario para crear un nuevo centro de formación
    public function create(){

        return view('training-center.create');
    }



    // Almacena un nuevo registro en la base de datos
    public function store(Request $request){

        $training_center = Training_center::create($request->all());

        // Redirige al index enviando un mensaje flash de exito para la alerta flotante
        return response()->json(['message' => '¡Centro de formación creado con éxito!','training_center' => $training_center]);
        //return redirect()->route('training-center.index')->with('success', '¡Centro de formacion creado con exito!');
    }


    // Muestra los detalles de un registro en específico
    public function show(Training_center $training_center){

        return response()->json($training_center);
        //return view('training-center.show', compact('training_center'));
    }


    // Muestra el formulario para editar un centro de formacion existente
    public function edit(Training_center $training_center){

        // Encuentra el Centro de Formacion y retorna la vista de edicion 
        return response()->json($training_center);
        //return view('training-center.edit', compact('training_center'));
    }


    // Actualiza un registro existente en la base de datos
    public function update(Request $request, Training_center $training_center){

        $training_center->name = $request->name;
        $training_center->location = $request->location;
        $training_center->save();

        // Redirige al index enviando el mensaje de exito
        return response()->json(['message' => '¡Centro de formación actualizado correctamente!', 'training_center' => $training_center]);
        
        //return redirect()->route('training-center.index')->with('success', '¡Centro de formacion actualizado correctamente!');
    }


    //Destroy encuentra el registro para luego eliminarlo..
    public function destroy(Training_center $training_center){
        
        $training_center->delete();

        // Redirige al index mostrando la alerta de exito correspondiente
        return response()->json(['message' => 'Centro eliminado correctamente']);
        
        //return redirect()->route('training-center.index')->with('success', 'Centro eliminado correctamente.');
    }
}
