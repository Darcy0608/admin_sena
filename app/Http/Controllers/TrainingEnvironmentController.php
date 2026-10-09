<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingEnvironment;

class TrainingEnvironmentController extends Controller
{
    // Muestra el listado de todos los ambientes
    public function index(){

        // Consulta todos los registros
        $training_environments = TrainingEnvironment::all();

        return response()->json($training_environments);
        //return view('training_environment.index', compact('training_environments'));
    }



    // Muestra el formulario para crear un ambiente nuevo
    public function create(){

        return view('training_environment.create');
    }



    // Almacena un nuevo registro de ambiente en la base de datos
    public function store(Request $request){

        $datos = $request->all();

        // Verifica si el usuario seleccionó una foto
        if ($request->hasFile('urlFoto')) {

            // Obtiene la foto
            $foto = $request->file('urlFoto');

            // Crea un nombre para la foto
            $nombreFoto = time() . '_' . $foto->getClientOriginalName();

            // Guarda la foto en storage/app/public/images
            $foto->storeAs('images', $nombreFoto, 'public');

            // Guarda el nombre de la foto
            $datos['urlFoto'] = $nombreFoto;
        }

        // Crea el ambiente en la base de datos
        $training_environment = TrainingEnvironment::create($datos);

        return response()->json(['message' => '¡Ambiente creado con éxito!', 'training_environment' => $training_environment]);
        //return redirect()->route('training_environment.index')->with('success', '¡Ambiente creado con éxito!');
    }



    // Muestra los detalles de un ambiente específico
    public function show(TrainingEnvironment $training_environment){

        return response()->json($training_environment);
        //return view('training_environment.show', compact('training_environment'));
    }



    // Muestra el formulario para editar un ambiente existente
    public function edit(TrainingEnvironment $training_environment){

        return response()->json($training_environment);
        //return view('training_environment.edit', compact('training_environment'));
    }


    // Actualiza la información de un ambiente
    public function update(Request $request, TrainingEnvironment $training_environment) {

        // Actualizamos los datos normales
        $training_environment->name = $request->name;
        $training_environment->code = $request->code;
        $training_environment->type = $request->type;
        $training_environment->capacity = $request->capacity;
        $training_environment->location = $request->location;
        $training_environment->status = $request->status;


        // Verificamos si el usuario selecciona una nueva foto
        if ($request->hasFile('urlFoto')) {

            // Obtenemos la nueva foto
            $foto = $request->file('urlFoto');

            // Crea un nuevo nombre para la foto
            $nombreFoto = time() . '_' . $foto->getClientOriginalName();

            // Guardamos la nueva foto
            $foto->storeAs('images', $nombreFoto, 'public');

            // Actualizamos el nombre de la foto en la base de datos
            $training_environment->urlFoto = $nombreFoto;
        }

        // Guarda todos los cambios
        $training_environment->save();


        // Redirigimos al listado y se muestra un mensaje de exito
        return response()->json(['message' => '¡Ambiente actualizado correctamente!', 'training_environment' => $training_environment]);
        //return redirect()->route('training_environment.index')->with('success', '¡Ambiente actualizado correctamente!');
    }


    // Elimina un ambiente de la base de datos
    public function destroy(TrainingEnvironment $training_environment){
        
        $training_environment->delete();

        // Redirige al listado mostrando un mensaje de éxito
        return response()->json(['message' => 'Ambiente eliminado correctamente.']);
        //return redirect()->route('training_environment.index')->with('success', 'Ambiente eliminado correctamente.');
    }
}