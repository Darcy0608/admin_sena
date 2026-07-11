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



    public function show(Course $course){

    //$course = Course::find($id);

    return view('course.show', compact('course'));
    }



    public function edit(Course $course){

    //Encuentro el Curso
    return view('course.edit', compact('course'));
    }



    public function update(Request $request, Course $course){

        $course->course_number = $request->course_number;
        $course->day = $request->day;
        $course->area_id = $request->area_id;
        $course->training_center_id = $request->training_center_id;
        $course->save();

        return redirect()->route('course.index');
    }



    

    public function destroy(Course $course){

        $course->delete();

        return redirect()->route('course.index');
    }
}
