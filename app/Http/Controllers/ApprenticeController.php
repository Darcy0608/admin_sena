<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;

class ApprenticeController extends Controller
{
    // Listamos los aprendices -- Realizamos una busqueda rapida
    public function index(Request $request)
    {
        // Si la peticion viene desde el modal de busqueda del Home
        if ($request->filled('search')) {
            $search = trim($request->input('search'));

            // Busca por el numero de documento 'Identity_card' o por el nombre 'name'
            $apprentice = Apprentice::where('Identity_card', $search)
                ->orWhere('name', 'LIKE', "%{$search}%")
                ->first();

            // Si se encuentra una coincidencia, redirige directamente a la vista show
            if ($apprentice) {
                return redirect()->route('apprentice.show', $apprentice->id);
            }

            // Si no encuentra registro, redirige a la lista general con un mensaje de alerta
            return redirect()->route('apprentice.index')->with('warning', 'No se encontro ningun aprendiz con esa informacion.');
        }

        // listado de aprendices
        $apprentices = Apprentice::with(['course', 'computer'])->get();
        return view('apprentice.index', compact('apprentices'));
    }


    // Muestra el formulario de creacion cargando cursos y computadores disponibles
    public function create()
    {

        $courses = Course::all();
        $computers = Computer::all();

        return view('apprentice.create', compact('courses', 'computers'));
    }


    // Almacena un nuevo aprendiz en la base de datos
    public function store(Request $request)
    {

        $apprentice = Apprentice::create($request->all());
        // Redirige al index enviando el mensaje de exito para la alerta flotante
        return redirect()->route('apprentice.index')->with('success', '¡Aprendiz creado con éxito!');
    }


    // Realiza una búsqueda específica de un aprendiz
    public function search(Request $request)
    {
        // Guardamos lo que escribio el usuario
        $search = $request->search;

        // Buscamos por nombre o documento
        $apprentice = Apprentice::with(['course', 'computer'])
            ->where('name', 'like', "%$search%")
            ->orWhere('Identity_card', 'like', "%$search%")
            ->first();

        // Si encontramos el aprendiz, vamos a su informacion
        if ($apprentice) {
            return redirect()->route('apprentice.show', $apprentice);
        }

        // Si no encontramos resultados, regresamos a la pagina anterior
        return back()->with('error', 'No se encontró ningun aprendiz.');
    }


    // Muestra la informacion detallada de un aprendiz
    public function show(int $id)
    {

        // Cargamos el aprendice junto con su curso y su computador
        $apprentice = Apprentice::with(['course', 'computer'])->findOrFail($id);

        return view('apprentice.show', compact('apprentice'));
    }


    // Muestra el formulario para editar un aprendiz
    public function edit(Apprentice $apprentice)
    {
        $courses = Course::all();
        $computers = Computer::all();

        return view('apprentice.edit', compact('apprentice', 'courses', 'computers'));
    }


    // Actualiza la informacion del aprendiz en la base de datos
    public function update(Request $request, Apprentice $apprentice)
    {
        $apprentice->Identity_card = $request->Identity_card;
        $apprentice->name = $request->name;
        $apprentice->email = $request->email;
        $apprentice->cell_number = $request->cell_number;

        $apprentice->course_id = $request->course_id;
        $apprentice->computer_id = $request->computer_id;
        $apprentice->save();

        // Redirige al index con el mensaje de exito en la alerta flotante
        return redirect()->route('apprentice.index')->with('success', '¡Aprendiz actualizado correctamente!');
    }



    // Elimina el registro de un aprendiz
    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();
        // Redirige al index mostrando la alerta de exito
        return redirect()->route('apprentice.index')->with('success', 'Aprendiz eliminado correctamente.');
    }
}
