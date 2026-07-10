@extends('layouts.app')

@section('content')
    <h1>Lista de Centros de Formación</h1>
    <br>

    <div class="container">
        <table id="idTraining_center" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Acción</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($training_centers as $training_center)
                    <tr>
                        <td>{{ $training_center->id }}</td>
                        <td>{{ $training_center->name }}</td>
                        <td>{{ $training_center->location }}</td>
                        <td>
                            <a href="{{ route('training_center.show', $training_center->id) }}">Mostrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <br>
    </div>


@endsection