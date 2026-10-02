<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class CategoryController extends Controller
{

    public function consulta1() {

        $respuesta = Area::with(['posts.user'])->get();
        return response()->json($respuesta);
    }

    public function index()
    {
        $areas = Area::all();

        return response()->json($areas);
    }
}
