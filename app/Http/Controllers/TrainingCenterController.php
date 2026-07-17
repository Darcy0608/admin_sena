<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    public function index(){
        $training_centers=Training_center::all();

        return view('training_center.index', compact('training_centers'));
    }


    public function create(){
        return view('training_center.create');
    }
    

    public function store(Request $request)
    {
        $training_center = Training_center::create($request->all());
        
        return $training_center;
    }



    public function show(Training_center $training_center){

    //$training_center = Training_center::find($id);

    return view('training_center.show', compact('training_center'));
    }



    public function edit(Training_center $training_center){

    //Encuentro el Centro de Formación
    return view('training_center.edit', compact('training_center'));
    }



    public function update(Request $request, Training_center $training_center){

        $training_center->name = $request->name;
        $training_center->location = $request->location;
        $training_center->save();

        return redirect()->route('training_center.index');
    }


    //Destroy encuentra el registro para luego eliminarlo..
    public function destroy(Training_center $training_center){

        $training_center->delete();

        return redirect()->route('training_center.index');
    }

}
