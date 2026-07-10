<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Training_center;
use App\Models\Area;

class CourseController extends Controller
{
    public function index(){
        $courses=Course::all();

        return view('course.index', compact('courses'));
    }


    public function create(){

        $training_centers = Training_center::all();
        $areas = Area::all();

        return view('course.create', compact('training_centers', 'areas'));
    }


    public function store(Request $request){

        $course = Course::create($request->all());

        return $course;
    }



    public function show ($id){

        $course = Course::find($id);
         
        return view('course.show',compact('course'));
    }
}
