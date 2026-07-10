@extends('layouts.app')

@section('content')
    <h1>Lista de Computadores</h1>
    <br>

    <div class="container">
        <table id="idComputador" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Number</th>
                    <th>Brand</th>
                    <th>Acción</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($computers as $computer)
                    <tr>
                        <td>{{ $computer->id }}</td>
                        <td>{{ $computer->number }}</td>
                        <td>{{ $computer->brand }}</td>
                        <td>
                            <a href="{{ route('computer.show', $computer->id) }}">Mostrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <br>
    </div>


@endsection