@extends('layouts.app')

@section('content')
    
    <h1>Formulario Registrar Computador</h1>
    
    <form action="{{ route('computer.store') }}" method="POST">

        @csrf

        <label>
            Numero:
            <br>
            <input type="text" name="number">
        </label>
        <br><br>

        <label>
            Marca:
            <br>
            <input type="text" name="brand">
        </label>
        <br><br>

        <button type="submit" class="btn btn-secondary">Enviar Formulario</button>

    </form>

    @endsection
