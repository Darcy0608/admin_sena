@extends('layouts.app')

@section('content')
    <h1>Actualizar Aprendiz</h1>
    <br>

    <form action="{{ route('apprentice.update', $apprentice) }}" method="POST">

        @csrf
        @method('put')



        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $apprentice->name)}}">
        </label>
        <br>
        <label>
            Email:
            <br>
            <input type="text" name="email"  value="{{ old('email', $apprentice->email)}}">
        </label>
        <br>
        <label>
            Numero de Celular:
            <br>
            <input type="number" name="cell_number" value="{{ old('cell_number', $apprentice->cell_number)}}">
        </label>
        <br><br>
        
        <button type="submit">Actualizar Aprendiz</button>
        <br><br>

        <a href="{{ route('apprentice.index') }}" class="btn btn-success mb-3">
            <i class="bi bi-arrow-left"></i> Volver </a>

    </form>
@endsection