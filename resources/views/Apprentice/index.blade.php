@extends('layouts.app')

@section('content')
    <h1>Lista de Aprendices</h1>

    <div class ="container">
        <table id="idApprentice" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Cell_number</th>
                    <th>Course_id</th>
                    <th>Computer_id</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apprentices as $apprentice)
                    <tr>
                        <br>
                        <td>{{ $apprentice->id }}</td>
                        <td>{{ $apprentice->name }}</td>
                        <td>{{ $apprentice->email }}</td>
                        <td>{{ $apprentice->cell_number }}</td>
                        <td>{{ $product->course_id }}</td>
                        <td>{{ $product->computer_id }}</td>
                        <td><a href="{{ route('apprentice.show', $apprentice->id) }}">Mostrar</a></td>

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>

{{$apprentices}}


@endsection