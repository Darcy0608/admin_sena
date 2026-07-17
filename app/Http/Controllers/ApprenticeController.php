<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;

class ApprenticeController extends Controller
{
    public function index(){
        $apprentices=Apprentice::all();

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



    public function show (Apprentice $apprentice){

        //$apprentice=Apprentice::find($id);
         
        return view('apprentice.show',compact('apprentice'));
    }



    public function edit(Apprentice $apprentice){
        
        //Encuentro el Aprendriz
        return view('apprentice.edit', compact('apprentice'));
    }



    public function update(Request $request, Apprentice $apprentice){
        
        $apprentice->name = $request->name;
        $apprentice->email = $request->email;
        $apprentice->cell_number = $request->cell_number;
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
