@extends('layouts.app')

@section('content')

<h1>Lista de Instructores</h1>
<br>

<div class="container">

    <table id="idTeacher" class="table table-striped table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Area</th>
                <th>Training Center</th>
                <th>Acción</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($teachers as $teacher)

                <tr>

                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->area_id }}</td>
                    <td>{{ $teacher->training_center_id }}</td>

                    <td>
                        <a href="{{ route('teacher.show', $teacher->id) }}">Mostrar</a>
                    </td>

                </tr>

            @endforeach

        </tbody>
    </table>
    <br>
</div>

@endsection