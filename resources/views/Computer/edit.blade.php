```blade
@extends('layouts.app')

@section('content')
    <h1>Actualizar Computador</h1>
    <br>

    <form action="{{ route('computer.update', $computer) }}" method="POST">

        @csrf
        @method('put')

        <label>
            Número:
            <br>
            <input type="number" name="number" value="{{ old('number', $computer->number) }}">
        </label>
        <br>

        <label>
            Marca:
            <br>
            <input type="text" name="brand" value="{{ old('brand', $computer->brand) }}">
        </label>
        <br><br>

        <button type="submit">Actualizar Computador</button>
        <br>
        <br>

        <a href="{{ route('computer.index') }}" class="btn btn-success mb-3">
            <i class="bi bi-arrow-left"></i> Volver
        </a>

    </form>
@endsection
