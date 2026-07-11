@extends('layouts.app')

@section('content')

<h1>Lista de Cursos</h1>
<br>

<div class="container">

    <table id="idCourse" class="table table-striped table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>Id</th>
                <th>Course Number</th>
                <th>Day</th>
                <th>Area</th>
                <th>Training Center</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>

        <tbody>
            <a href="{{ route('course.create') }}" class="btn btn-success mb-3">
                <i class="bi bi-plus-circle"></i> Nuevo Curso </a>

            @foreach ($courses as $course)

                <tr>

                    <td>{{ $course->id }}</td>
                    <td>{{ $course->course_number }}</td>
                    <td>{{ $course->day }}</td>
                    <td>{{ $course->area_id }}</td>
                    <td>{{ $course->training_center_id }}</td>

                    <td>
                        <a href="{{ route('course.show', $course->id) }}">Mostrar</a>
                    </td>

                    <td>
                        <a href="{{ route('course.edit', $course->id) }}">Editar</a>
                    </td>

                    <td>
                        <form action="{{ route('course.destroy', $course->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>
    <br>
</div>

@endsection