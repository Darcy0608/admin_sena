@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        <div class="card shadow-lg border-0">

            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">
                    {{ $apprentice['name'] }}
                </h3>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">ID</label>
                        <div class="form-control">
                            {{ $apprentice['id'] }}
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Curso</label>
                        <div class="form-control">
                            {{ $apprentice['course_id'] }}
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Computador</label>
                        <div class="form-control">
                            {{ $apprentice['computer_id'] }}
                        </div>
                    </div>

                </div>

                <div class="mb-3">
                    <label class="fw-bold">Nombre</label>
                    <div class="form-control">
                        {{ $apprentice['name'] }}
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Email</label>
                    <div class="form-control">
                        {{ $apprentice['email'] }}
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-bold">Numero de Celular</label>
                    <div class="form-control">
                        {{ $apprentice['cell_number'] }}
                    </div>
                </div>

                <div class="row">


                </div>

                <hr>

                <div class="row">

                    <div class="col-md-6">
                        <label class="fw-bold">Fecha de creación</label>
                        <div class="form-control">
                            {{ \Carbon\Carbon::parse($apprentice['created_at'])->format('d/m/Y H:i') }}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="fw-bold">Última actualización</label>
                        <div class="form-control">
                            {{ \Carbon\Carbon::parse($apprentice['updated_at'])->format('d/m/Y H:i') }}
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="d-flex justify-content-end mt-4">

            <a href="{{ url()->previous() }}" class="btn btn-secondary me-2">
                <i class="bi bi-arrow-left"></i> Volver
            </a>

            {{-- Si prefieres regresar a una ruta específica --}}
            {{-- <a href="{{ route('products.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Volver
             </a> --}}

        </div>
        <br>


    </div>
@endsection