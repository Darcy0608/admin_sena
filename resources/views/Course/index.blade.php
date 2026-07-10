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
                <th>Acción</th>
            </tr>
        </thead>

        <tbody>

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

                </tr>

            @endforeach

        </tbody>

    </table>
    <br>
</div>

@endsection