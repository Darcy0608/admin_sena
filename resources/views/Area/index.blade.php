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
                    <th>Acción</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area->id }}</td>
                        <td>{{ $area->name }}</td>
                        <td>
                            <a href="{{ route('area.show', $area->id) }}">Mostrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
        <br>
    </div>


@endsection