<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #16780c">

    <div class="container-fluid">

        <!-- LOGO + ADMIN SENA -->
        <a class="navbar-brand d-flex align-items-center"
           href="{{ route('home') }}">

            <span class="bg-white rounded p-1 me-2">

                <img src="https://pautonoticias.com/sites/default/files/Article/sena-colombia-logo-green39a900png-20250120.png"
                     alt="Logo SENA"
                     width="50"
                     height="50"
                     class="img-fluid">

            </span>

            <span class="text-white fw-bold">
                Admin SENA
            </span>

        </a>


        <!-- BOTÓN RESPONSIVE -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <!-- OPCIONES DE LA IZQUIERDA -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">

                <!-- ADMINISTRACIÓN -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle text-white"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Administración
                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('area.index') }}">
                                Ver Áreas
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('training_center.index') }}">
                                Ver Centros
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('computer.index') }}">
                                Ver Computadores
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('course.index') }}">
                                Ver Cursos
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('teacher.index') }}">
                                Ver Instructores
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('apprentice.index') }}">
                                Ver Aprendices
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- QUIÉNES SOMOS -->
                <li class="nav-item">

                    <a class="nav-link text-white"
                       href="{{ route('home') }}#quienes-somos">
                        Quiénes somos
                    </a>
                </li>
            </ul>


            <!-- OPCIONES DE LA DERECHA -->
            <ul class="navbar-nav ms-auto align-items-center">

                <!-- BUSCADOR DE APRENDICES-->
                <form class="d-flex me-3"
                    role="search"
                    method="GET"
                    action="{{ route('apprentice.search') }}">
                    
                    <!-- Nombre o identificación del aprendiz -->
                    <input class="form-control me-2"
                        type="search"
                        name="search"
                        placeholder="Nombre o identificación..."
                        aria-label="Buscar aprendiz"
                        required>

                    <!-- Botón para buscar -->
                    <button class="btn btn-light" type="submit">
                        🔍
                    </button>

                </form>


                <!-- PERFIL -->
                <li class="nav-item">

                    <a class="nav-link text-white"
                       href="#">
                        Perfil
                    </a>
                </li>


                <!-- INICIAR SESIÓN -->
                <li class="nav-item">

                    <a class="nav-link text-white"
                       href="#">
                        Iniciar sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>