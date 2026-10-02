<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    // Muestra el listado de todos los computadores
    public function index(){
        
        $computers = Computer::all();

        return view('computer.index', compact('computers'));
    }


    // Muestra el formulario para registrar un nuevo computador
    public function create(){

        return view('computer.create');
    }


    // Almacena un nuevo computador en la base de datos
    public function store(Request $request){

        $computer = Computer::create($request->all());
        // Redirige al index enviando el mensaje de exito para la alerta flotante
        return redirect()->route('computer.index')->with('success', '¡Computador creado con exito!');
    }


    // Muestra los detalles de un computador en especifico
    public function show(Computer $computer){

        return view('computer.show', compact('computer'));
    }


    // Muestra el formulario para editar un computador existente
    public function edit(Computer $computer){

        //Encuentro el Computador
        return view('computer.edit', compact('computer'));
    }


    // Actualiza la informacion del computador en la base de datos
    public function update(Request $request, Computer $computer){

        $computer->number = $request->number;
        $computer->brand = $request->brand;
        $computer->save();

        // Redirige al index enviando el mensaje de exito para la alerta flotante
        return redirect()->route('computer.index')->with('success', '¡Computador actualizado correctamente!');
    }


    // Elimina el registro de un computador de la base de datos
    public function destroy(Computer $computer){

        $computer->delete();

        // Redirige al index mostrando la alerta de exito correspondiente
        return redirect()->route('computer.index')->with('success', 'Computador eliminado correctamente.');
    }
}
