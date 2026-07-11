@extends('layouts.app')

@section('content')
    <h1>Lista de Areas</h1>
    <br>

    <div class="container">
        <table id="idArea" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th colspan="3">Acción</th>
                </tr>
            </thead>

            <tbody>

                <a href="{{ route('area.create') }}" class="btn btn-success mb-3">
                    <i class="bi bi-plus-circle"></i> Nueva Area </a>
                    
                    @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area->id }}</td>
                        <td>{{ $area->name }}</td>


                        <td>
                            <a href="{{ route('area.show', $area->id) }}">Mostrar</a>
                        </td>
                        
                        <td>
                            <a href="{{ route('area.edit', $area->id) }}">Editar</a>
                        </td>

                        <td>
                        <form action="{{ route('area.destroy', $area->id) }}" method="POST">
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
       