@extends('layouts.app')

@section('content')
    
    <h1>Formulario Registrar Centro de Formación</h1>
    
    <form action="{{ route('training_center.store') }}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>

        <br><br>

        <label>
            Ubicación:
            <br>
            <input type="text" name="location">
        </label>

        <br><br>

        <button type="submit" class="btn btn-secondary">Enviar Formulario</button>

    </form>

    @endsection