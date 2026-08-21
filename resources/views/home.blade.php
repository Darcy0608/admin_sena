@extends('layouts.app')

@section('content')

<style>
    .carousel-item{
        position: relative;
    }

    /* Capa oscura sobre la imagen */
    .carousel-item::before{
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.45);
        top: 0;
        left: 0;
        z-index: 1;
    }

    .carousel-caption{
        z-index: 2;
    }
 
    .carousel-caption .contenido{
        background: rgba(0, 0, 0, 0.45);
        padding: 20px;
        border-radius: 10px;
        display: inline-block;
    }

    .carousel-caption h5{
        font-size: 2rem;
        font-weight: bold;
        color: white;
    }

    .carousel-caption p{
        font-size: 1.2rem;
        color: white;
    }

    .carousel-img{
    width: 100%;
    height: 550px;
    object-fit: cover;
    object-position: center;
    image-rendering: auto;
    }

    /* ANUNCIOS */
    .anuncio-card{
        border: none;
        border-radius: 12px;
        overflow: hidden;
        transition: 0.3s;
    }

    .anuncio-card:hover{
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.20);
    }

    .anuncio-card img{
        width: 100%;
        height: 200px;
        object-fit: cover;
        object-position: center;
    }

    .anuncio-card .card-body{
        padding: 20px;
    }

    .titulo-anuncios{
        font-weight: bold;
        color: #16780c;
    }
</style>

<h1 class="text-center mb-4">
    Sistema de Administración SENA
</h1>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="{{ asset('img/img01.jpg') }}" class="carousel-img"  alt="Inicio">

            <div class="carousel-caption d-none d-md-block">
                <div class="contenido">
                    <h5>Bienvenido</h5>
                    <p>Sistema de Administración SENA.</p>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('img/img02.jpg') }}" class="d-block w-100" style="height:550px; object-fit:cover;" alt="Cursos">

            <div class="carousel-caption d-none d-md-block">
                <div class="contenido">
                    <h5>Cursos</h5>
                    <p>Consulta todos los cursos registrados.</p>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('img/img03.jpg') }}" class="d-block w-100" style="height:550px; object-fit:cover;" alt="Aprendices">

            <div class="carousel-caption d-none d-md-block">
                <div class="contenido">
                    <h5>Aprendices</h5>
                    <p>Administra aprendices e instructores.</p>
                </div>
            </div>
        </div>

    </div>
    <br>


    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>

<br><br>

{{-- ANUNCIOS --}}

<div class="container my-5">

    <div class="text-center mb-4">

        <h2 class="titulo-anuncios">
            <i class="bi bi-megaphone-fill"></i>
             Anuncios
        </h2>

        <p class="text-muted">
            Conoce las novedades y noticias más importantes del SENA.
        </p>

    </div>

    <div class="row g-4">

        {{-- ANUNCIO 1 --}}
        <div class="col-md-4">
            <div class="card anuncio-card h-100 shadow">

                <img src="{{ asset('img/anuncio_cursos.jpg') }}"
                     alt="Nuevo curso">

                <div class="card-body">

                    <span class="badge bg-success mb-2"> Cursos </span>

                    <h5 class="card-title"> Nuevos cursos disponibles </h5>

                    <p class="card-text text-muted"> Conoce los nuevos cursos disponibles y consulta 
                        la información de cada programa de formación.
                    </p>

                    <a href="{{ route('course.index') }}"
                       class="btn btn-success">
                        Ver más →
                    </a>

                </div>
            </div>
        </div>


        {{-- ANUNCIO 2 --}}
        <div class="col-md-4">
            <div class="card anuncio-card h-100 shadow">

                <img src="{{ asset('img/anuncio_registro.jpg') }}"
                     alt="Aprendices">

                <div class="card-body">

                    <span class="badge bg-primary mb-2">
                        Aprendices
                    </span>

                    <h5 class="card-title">
                        Registro de aprendices
                    </h5>

                    <p class="card-text text-muted">
                        Consulta y administra la información de los
                        aprendices registrados en el sistema.
                    </p>

                    <a href="{{ route('apprentice.index') }}"
                       class="btn btn-success">
                        Ver más →
                    </a>

                </div>
            </div>
        </div>


        {{-- ANUNCIO 3 --}}
        <div class="col-md-4">
            <div class="card anuncio-card h-100 shadow">

                <img src="{{ asset('img/anuncio_instructores.jpg') }}"
                     alt="Instructores">

                <div class="card-body">

                    <span class="badge bg-warning text-dark mb-2">
                        Instructores
                    </span>

                    <h5 class="card-title">
                        Administración de instructores
                    </h5>

                    <p class="card-text text-muted">
                        Consulta la información de los instructores
                        registrados en el sistema.
                    </p>

                    <a href="{{ route('teacher.index') }}"
                       class="btn btn-success">
                        Ver más →
                    </a>

                </div>
            </div>
        </div>

    </div>

</div>

<br><br>

<div class="container">

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow">
                <div class="card-body text-center">
                    <i class="bi bi-eye-fill text-success fs-1"></i>
                    <h4 class="mt-3">Visión</h4>
                    <p>Para el año 2026, el SENA fortalecerá su reconocimiento como una
                        entidad líder en formación profesional integral, aportando al 
                        desarrollo social, económico y tecnológico del país. 
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow">
                <div class="card-body text-center">
                    <i class="bi bi-bullseye text-success fs-1"></i>
                    <h4 class="mt-3">Misión</h4>
                    <p>El SENA está encargado de cumplir la función que le corresponde al
                        Estado de invertir en el desarrollo social y técnico de los
                        trabajadores colombianos, ofreciendo formación profesional integral.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow">
                <div class="card-body text-center">
                    <i class="bi bi-envelope-fill text-success fs-1"></i>
                    <h4 class="mt-3">Contáctanos</h4>
                    <p><strong>Correo:</strong> admin34@example.com</p>
                    <p><strong>Teléfono:</strong> +57 300 000 0000</p>
                    <p><strong>Dirección:</strong> SENA - Centro de Formación</p>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection