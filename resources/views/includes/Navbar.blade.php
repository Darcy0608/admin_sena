<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #16780c">
    <div class="container-fluid">

        <img src="https://www.sena.edu.co/Paginas/img/logo-sena-blanco.png" alt="logo_sena" width="50" height="50">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('area/create') }}">Área</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('training_center/create') }}">Centro</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('computer/create') }}">Computador</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('course/create') }}">Curso</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('teacher/create') }}">Instructor</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('apprentice/create') }}">Aprendiz</a>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        Listados

                    </a>

                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="{{ route('area.index') }}">Áreas</a></li>

                        <li><a class="dropdown-item" href="{{ route('training_center.index') }}">Centros</a></li>

                        <li><a class="dropdown-item" href="{{ route('computer.index') }}">Computadores</a></li>

                        <li><a class="dropdown-item" href="{{ route('course.index') }}">Cursos</a></li>

                        <li><a class="dropdown-item" href="{{ route('teacher.index') }}">Instructores</a></li>

                        <li><a class="dropdown-item" href="{{ route('apprentice.index') }}">Aprendices</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>