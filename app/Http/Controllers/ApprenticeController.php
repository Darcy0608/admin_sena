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
}
