<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #16780c">
    <div class="container-fluid">

    <!-- LOGO SENA, REDIRIGE AL HOME -->
        <a href="{{ route('home') }}">
        <img src="https://www.sena.edu.co/Paginas/img/logo-sena-blanco.png" 
        alt="logo sena" 
        width="50" 
        height="60">
        <span>Admin SENA</span>
        </a>

        

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <!-- LISTADOS -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"> Administracion </a>

                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="{{ route('area.index') }}"> Ver Áreas</a></li>

                        <li><a class="dropdown-item" href="{{ route('training_center.index') }}"> Ver Centros</a></li>

                        <li><a class="dropdown-item" href="{{ route('computer.index') }}"> Ver Computadores</a></li>

                        <li><a class="dropdown-item" href="{{ route('course.index') }}"> Ver Cursos</a></li>

                        <li><a class="dropdown-item" href="{{ route('teacher.index') }}"> Ver Instructores</a></li>

                        <li><a class="dropdown-item" href="{{ route('apprentice.index') }}"> Ver Aprendices</a></li>
                    </ul>
                </li>

                <!-- OPCIONES IZQUIERDA -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                <!-- Quienes Somos -->
                <li class="nav-item"> 
    <a class="nav-link text-white" href="{{ route('home') }}#quienes-somos"> Quiénes somos </a> 
               </li>


            <!-- BUSCADOR -->
            <form class="d-flex me-3" role="search">


                <input class="form-control me-2"
                       type="search"
                       placeholder="Buscar..."
                       aria-label="Buscar">

                <button class="btn btn-light" type="submit">🔍</button>
            </form>

            <li class="nav-item">
                <a class="nav-link text-white" href="#"> 👤 Perfil </a> 
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    Iniciar sesión
                </a>
            </li>

            </ul>
        </div>
    </div>
</nav>