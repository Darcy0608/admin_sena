<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use Cloudinary\Cloudinary;

class ComputerController extends Controller
{
    // Muestra el listado de todos los computadores
    public function index()
    {
        $computers = Computer::all();

        return response()->json($computers);
        //return view('computer.index', compact('computers'));
    }



    // Muestra el formulario para registrar un nuevo computador
    public function create()
    {

        return view('computer.create');
    }


    // Almacena un nuevo computador en la base de datos
    public function store(Request $request){

        // Se validan los campos 
        $request->validate([
            'number' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        // Obtenemos la imagen 
        $file = $request->file('imagen');

        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => config('services.cloudinary.cloud_name'),
                'api_key' => config('services.cloudinary.api_key'),
                'api_secret' => config('services.cloudinary.api_secret'),
            ],
            'url' => ['secure' => true],
        ]);

        $resultado = $cloudinary->uploadApi()->upload(
            $file->getRealPath(),
            [
                'folder' => 'categories',
                'resource_type' => 'image',
            ]
        );

        // Guardamos los datos del computador
        $computer = Computer::create([
            'number' => $request->number,
            'brand' => $request->brand,
            'imagen_url' => $resultado['secure_url'],
            'imagen_public_id' => $resultado['public_id'],
        ]);

        // Redirige al index enviando el mensaje de exito para la alerta flotante
        return response()->json([
            'message' => '¡Computador creado con éxito!',
            'computer' => $computer
        ]);
        //return redirect()->route('computer.index')->with('success', '¡Computador creado con exito!');
    }



    // Muestra los detalles de un computador en especifico
    public function show(Computer $computer)
    {

        return response()->json($computer);
        //return view('computer.show', compact('computer'));
    }



    // Muestra el formulario para editar un computador existente
    public function edit(Computer $computer)
    {

        //Encuentro el Computador
        return response()->json($computer);
        //return view('computer.edit', compact('computer'));
    }



    // Actualiza la informacion del computador en la base de datos
    public function update(Request $request, Computer $computer)
    {

        $computer->number = $request->number;
        $computer->brand = $request->brand;
        $computer->save();

        // Redirige al index enviando el mensaje de exito para la alerta flotante
        return response()->json(['message' => '¡Computador actualizado correctamente!', 'computer' => $computer]);
        //return redirect()->route('computer.index')->with('success', '¡Computador actualizado correctamente!');
    }


    // Elimina el registro de un computador de la base de datos
    public function destroy(Computer $computer)
    {

        $computer->delete();

        // Redirige al index mostrando la alerta de exito correspondiente
        return response()->json(['message' => 'Computador eliminado correctamente.']);
        //return redirect()->route('computer.index')->with('success', 'Computador eliminado correctamente.');
    }
}
