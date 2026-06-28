@extends('layouts.app')

@section('content')

    <h1>Formulario Area</h1>
    <form action="{{ route('area.store') }}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br><br>

        <button type="submit" class="btn btn-secondary">Enviar Formulario</button>
        
    </form>

    @endsection