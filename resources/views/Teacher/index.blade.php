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
                <th colspan="3">Acción</th>
            </tr>
        </thead>

        <tbody>
            <a href="{{ route('teacher.create') }}" class="btn btn-success mb-3">
                <i class="bi bi-plus-circle"></i> Nuevo Instructor </a>

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

                    <td>
                        <a href="{{ route('teacher.edit', $teacher->id) }}">Editar</a>
                    </td>
                    
                    <td>
                        <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST">
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