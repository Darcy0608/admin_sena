@extends('layouts.app')

@section('content')

    <h1>Formulario Profesores</h1>
    <form action="{{ route('teacher.store') }}" method="POST">

        @csrf

        <label>
            Nombre instructor:
            <br>
            <input type="text" name="name">
        </label>
        <br><br>

        <label>
            Email:
            <br>
            <input type="email" name="email">
            <input type="date" name="day">
        </label>
        <br><br>

        <label for="area_id">Area:</label>
        <select name="area_id" id="area_id" class="form-control">
            <option value="">Selecione area</option>
            @foreach($areas as $area)
                <option value="{{$area->id}}">
                    {{$area->name}}
                </option>
            @endforeach
        </select>
        <br><br>

        <label for="training_center_id">Centro de Formacion:</label>
        <select name="training_center_id" id="training_center_id" class="form-control">
            <option value="">Selecione un centro de formacion</option>
            @foreach($training_centers as $training_center)
                <option value="{{$training_center->id}}">
                    {{$training_center->name}}
                </option>
            @endforeach

        </select>

        <br><br>


        <button type="submit" class="btn btn-secondary">Enviar Formulario</button>

    </form>

    @endsection