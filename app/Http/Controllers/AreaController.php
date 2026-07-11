<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function index(){
        $areas=Area::all();

        return view('area.index', compact('areas'));
    }


    public function create(){
        return view('area.create');
    }

    
    public function store(Request $request){

        $area = Area::create($request->all());

        return $area;
    }



    public function show (Area $area){
        
        //$area = Area::find($id);
         
        return view('area.show',compact('area'));
    }



    public function edit(Area $area){

        //Encuentro el Area
        return view('area.edit', compact('area'));
    }



    public function update(Request $request, Area $area){
        
        $area->name = $request->name;
        $area->save();

        return redirect()->route('area.index');
    }



    public function destroy(Area $area){

    $area->delete();

    return redirect()->route('area.index');
    }
}
