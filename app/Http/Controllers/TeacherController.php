<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher; 
use App\Models\Area; 
use App\Models\Training_center; 

class TeacherController extends Controller
{
    public function index(){
        $teachers=Teacher::$courses=Course::with(['area', 'training_center'])->get();

        return view('teacher.index', compact('teachers'));
    }


    public function create(){

        $training_centers = Training_center::all();
        $areas = Area::all();

        return view('teacher.create', compact('training_centers', 'areas'));
    }


    public function store(Request $request){

        $teacher = Teacher::create($request->all());

        return $teacher;
    }



    public function show(Teacher $teacher){

    //$teacher = Teacher::find($id);

    return view('teacher.show', compact('teacher'));
    }



    public function edit(Teacher $teacher){

    //Encuentro el Instructor
    return view('teacher.edit', compact('teacher'));
    }



    public function update(Request $request, Teacher $teacher){

        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->area_id = $request->area_id;
        $teacher->training_center_id = $request->training_center_id;
        $teacher->save();

        return redirect()->route('teacher.index');
    }


    
    public function destroy(Teacher $teacher){

        $teacher->delete();

        return redirect()->route('teacher.index');
    }
}
