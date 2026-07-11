```blade
@extends('layouts.app')

@section('content')
    <h1>Actualizar Centro de Formación</h1>
    <br>

    <form action="{{ route('training_center.update', $training_center) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $training_center->name) }}">
        </label>
        <br>

        <label>
            Ubicación:
            <br>
            <input type="text" name="location" value="{{ old('location', $training_center->location) }}">
        </label>
        <br><br>

        <button type="submit">Actualizar Centro de Formación</button>
        <br>
        <br>

        <a href="{{ route('training_center.index') }}" class="btn btn-success mb-3">
            <i class="bi bi-arrow-left"></i> Volver
        </a>

    </form>
@endsection