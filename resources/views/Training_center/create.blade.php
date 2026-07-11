@extends('layouts.app')

@section('content')

    <h1>Formulario Registrar Centro de Formación</h1>

    <form action="{{ route('training_center.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>

        <br><br>

        <label>
            Ubicación:
            <br>
            <input type="text" name="location" value="{{ old('location') }}">
        </label>

        <br><br>

        <button type="submit" class="btn btn-success">Enviar Formulario</button>

    </form>

@endsection