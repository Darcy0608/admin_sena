<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    // Mostramos el listado de todas las areas
    // Cambiamos return view por return response
    public function index(){
        // Consulta todos los registros 
        $areas=Area::all();

        return response()->json($areas);
        //return view('area.index', compact('areas'));
    }



    // Muestra el formulario para crear un area nueva
    public function create(){
        return view('area.create');
    }

     

    // Almacena un nuevo registro de area en la base de datos
    // Cambiamos return view por return response
    public function store(Request $request){

        $area = Area::create($request->all());

        // Redirige al listado enviando el mensaje de exito para la alerta flotante
        return response()->json(['message' => '¡Área creada con éxito!', 'area' => $area], 201);
        //return response()->json($area)->with('success', '¡Area creada con exito!');
    }



    // Muestra los detalles de un area en especifico
    // Cambiamos return view por return response
    public function show (Area $area){
        
        //$area = Area::find($id);
        //return view('area.show',compact('area'));
        return response()->json($area);
    }



    // Muestra el formulario para editar un area existente
    public function edit(Area $area){

        //Encuentro el Area
        return response()->json($area);
        //return view('area.edit', compact('area'));
    }


    // Actualiza la informacion de un area en la base de datos
    public function update(Request $request, Area $area){
        
        $area->name = $request->name;
        $area->save();

        // Redirige al listado enviando el mensaje de exito para la alerta flotante
        return response()->json(['message' => '¡Área actualizada correctamente!', 'area' => $area]);
        //return redirect()->route('area.index')->with('success', '¡Area actualizada correctamente!');
    }


    // Elimina un registro de la base de datos
    public function destroy(Area $area){

    $area->delete();

    // Redirige al listado mostrando la alerta de exito correspondiente
    return response()->json(['message' => '¡Área eliminada correctamente!']);    
    //return redirect()->route('area.index')->with('success', 'Area eliminada correctamente');
    }
}
