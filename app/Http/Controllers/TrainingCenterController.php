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



    public function show ($id){

        $training_center = Training_center::find($id);
         
        return view('training_center.show',compact('training_center'));
    }

}
