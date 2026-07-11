@extends('layouts.app')

@section('content')

    <h1>Formulario Área</h1>

    <form action="{{ route('area.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        <br><br>

        <button type="submit" class="btn btn-success">Enviar Formulario</button>

    </form>

@endsection