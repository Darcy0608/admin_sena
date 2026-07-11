<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function index(){
        
        $computers = Computer::all();

        return view('computer.index', compact('computers'));
    }



    public function create(){

        return view('computer.create');
    }



    public function store(Request $request){

        $computer = Computer::create($request->all());

        return $computer;
    }



    public function show(Computer $computer){

        //$computer = Computer::find($id);

        return view('computer.show', compact('computer'));
    }



    public function edit(Computer $computer){

        //Encuentro el Computador
        return view('computer.edit', compact('computer'));
    }



    public function update(Request $request, Computer $computer){

        $computer->number = $request->number;
        $computer->brand = $request->brand;
        $computer->save();

        return redirect()->route('computer.index');
    }



    public function destroy(Computer $computer){

        $computer->delete();

        return redirect()->route('computer.index');
    }
}
