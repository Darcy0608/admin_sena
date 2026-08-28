<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;

class ApprenticeController extends Controller
{
    //Listamos los aprendices
    public function index(){
        //Traemos los aprendices y de una vez el curso y el computador
        $apprentices = Apprentice::with(['course', 'computer'])->get();

        return view('apprentice.index', compact('apprentices'));
    }



    public function create(){

        $courses = Course::all();
        $computers = Computer::all();

        return view('apprentice.create', compact('courses', 'computers'));
    }



    public function store(Request $request){

        $apprentice = Apprentice::create($request->all());

        return $apprentice;
    }



    public function search (Request $request){
        // Guardamos lo que escribió el usuario
        $search = $request->search;

        // Buscamos por nombre o documento
        $apprentice = Apprentice::with(['course', 'computer'])
            ->where('name', 'like', "%$search%")
            ->orWhere('Identity_card', 'like', "%$search%")
            ->first();

        // Si encontramos el aprendiz, vamos a su información
        if ($apprentice) {
            return redirect()->route('apprentice.show', $apprentice);
        }

        // Si no encontramos resultados, regresamos a la página anterior
        return back()->with('error', 'No se encontró ningún aprendiz.');
    }



    public function show (Apprentice $apprentice){

        //$apprentice=Apprentice::find($id);
         
        return view('apprentice.show',compact('apprentice'));
    }



    public function edit(Apprentice $apprentice){
        
        //Encuentro el Aprendriz
        return view('apprentice.edit', compact('apprentice'));
    }



    public function update(Request $request, Apprentice $apprentice){
        
        $apprentice->Identity_card = $request->Identity_card;
        $apprentice->name = $request->name;
        $apprentice->email = $request->email;
        $apprentice->cell_number = $request->cell_number;

        $apprentice->course_id = $request->course_id;
        $apprentice->computer_id = $request->computer_id;
        $apprentice->save();

        return redirect()->route('apprentice.index');
        }
    
        

    //Destroy encuentra el registro para luego eliminarlo..
    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();
        return redirect()->route('apprentice.index');
    }
}
