@extends('layouts.app')

@section('content')

    <h1>Formulario Aprendices</h1>
    <form action="{{ route('apprentice.store') }}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br><br>

        <label>
            Email:
            <br>
            <input type="email" name="email">
        </label>
        <br><br>

        <label>
            Numero de telefono:
            <br>
            <input type="number" name="cell_number">
        </label>
        <br><br>

        <label for="course_id">Curso: </label>
        <select name="course_id" id="course_id" class="form-control">
            <option value="">Selecione un curso</option>
            @foreach($courses as $course)
                <option value="{{$course->id}}">
                    {{$course->course_number}}
                </option>
            @endforeach
        </select>
        <br><br>

        <label for="computer_id">Equipo: </label>
        <select name="computer_id" id="computer_id" class="form-control">
            <option value="">Selecione un equipo</option>
            @foreach($computers as $computer)
                <option value="{{$computer->id}}">
                    {{$computer->number}}
                </option>
            @endforeach

        </select>

        <br><br>

        <button type="submit" class="btn btn-secondary">Enviar Formulario</button>

    </form>

    @endsection