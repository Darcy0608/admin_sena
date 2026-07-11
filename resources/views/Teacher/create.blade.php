@extends('layouts.app')

@section('content')

    <h1>Formulario Profesores</h1>

    <form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre instructor:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        <br><br>

        <label>
            Email:
            <br>
            <input type="email" name="email" value="{{ old('email') }}">
        </label>
        <br><br>

        <label>
            Fecha:
            <br>
            <input type="date" name="day" value="{{ old('day') }}">
        </label>
        <br><br>

        <label for="area_id">Área:</label>
        <select name="area_id" id="area_id" class="form-control">
            <option value="">Seleccione un área</option>
            @foreach($areas as $area)
                <option value="{{ $area->id }}" {{ old('area_id') == $area->id ? 'selected' : '' }}>
                    {{ $area->name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label for="training_center_id">Centro de Formación:</label>
        <select name="training_center_id" id="training_center_id" class="form-control">
            <option value="">Seleccione un centro de formación</option>
            @foreach($training_centers as $training_center)
                <option value="{{ $training_center->id }}" {{ old('training_center_id') == $training_center->id ? 'selected' : '' }}>
                    {{ $training_center->name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <button type="submit" class="btn btn-success">Enviar Formulario</button>

    </form>

@endsection