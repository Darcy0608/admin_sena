@extends('layouts.app')

@section('content')
<h1>Lista de Aprendices</h1>
<br>

<div class="container">

    <table id="idApprentice" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Número de Identificación</th>
                <th>Nombre</th>
                <th>Correo Electronico</th>
                <th>Numero de celular</th>
                <th>Id_curso</th>
                <th>Id_computador</th>
                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>

        <a href="{{ route('apprentice.create') }}" class="btn btn-success mb-3">
            <i class="bi bi-plus-circle"></i> Nuevo Aprendiz </a>

            @foreach ($apprentices as $apprentice)
                <tr>
                    <td>{{ $apprentice->id }}</td>
                    <td>{{ $apprentice->Identity_card}}</td>
                    <td>{{ $apprentice->name }}</td>
                    <td>{{ $apprentice->email }}</td>
                    <td>{{ $apprentice->cell_number }}</td>
                    
                    <td>{{ $apprentice->course->course_number ?? 'Sin curso' }}</td>
                    <td>{{ $apprentice->computer->brand ?? 'Sin computador'}}</td>

                    <td>
                        <a href="{{ route('apprentice.show', $apprentice->id) }}">Mostrar</a>
                    </td>
                    <td>
                        <a href="{{ route('apprentice.edit', $apprentice->id) }}">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('apprentice.destroy', $apprentice->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection