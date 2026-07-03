<nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: #323e9b">
    <div class="container-fluid">
      <img src="https://www.sena.edu.co/Paginas/img/logo-sena-blanco.png" alt="logo_sena" width="50" height="50">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('area.create')}}">Area</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('trainingcenter.registro') }}">Centros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('computer.computador')}}">Computador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('course.registro')}}">Cursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('teacher.registro')}}">Instructores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('apprentice.registro')}}">Aprendices</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Formularios
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/areas/create">Area</a></li>
              <li><a class="dropdown-item" href="/trainingcenter/registrar">trainingcenter</a></li>
              <li><a class="dropdown-item" href="/computer/computador">Computer</a></li>
              <li><a class="dropdown-item" href="/course/registro">Course</a></li>
              <li><a class="dropdown-item" href="/teacher/registro">Teacher</a></li>
              <li><a class="dropdown-item" href="/apprentice/registro">Apprentice</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Hola</button>
        </form>
      </div>
    </div>
  </nav>