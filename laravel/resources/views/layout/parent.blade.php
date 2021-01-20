<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        <title>@yield('title')</title>
        
        <!-- Bootstrap CSS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Vue.js -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

        <!-- CSS links -->
            <!-- Coleccion view -->
                <!-- Parent -->
                <link href="{{ asset('sass/parent.css') }}" rel="stylesheet">
                <!-- Cartas -->
                <link href="{{ asset('CSS/cartas.css') }}" rel="stylesheet">
                <!-- JS filter -->
                <script src="{{ asset('js/coleccion.js') }}"></script>
    </head>

    <body class="backgroundGeneral">
    <header>
    <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark lighten-1 ">
        <a class="navbar-brand" href="{{ url('/') }}">Desayunos Feministas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
            aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/elegirModo') }}">Juegos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/coleccion') }}">Mujeres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/comoJugar') }}">Como Jugar</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right mr-auto nav-flex-icons">
                <li class="nav navbar-nav navbar-right">
                @if (auth()->check())
                    <a class="nav-link" href="{{ url('/logout') }}">Cerrar Sesion (<?php echo auth()->user()->name; ?>)</a>
                    
                @else
                    <a class="nav-link" href="{{ url('/login') }}">Iniciar Sesion
                    </a>
                @endif
                </li>
            </ul>
        </div>
        
        </nav>
        <!--/.Navbar -->
    </header>

    <!--Main Layout-->
    <!-- La clase main la llamarán solo las view que tengas ese css -->
    <main >
        <div class="container marginComoJugar">
            @yield('content')
        </div>
    </main>

    <!-- Galserias js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    
    <!-- Footer -->
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="cFooter text-center">
            <small>Copyright &copy; Desayunos Feministas | <script>document.write(new Date().getFullYear());</script></small>
        </div>
        @if (auth()->check() && auth()->user()->is_admin == 1)
            <div class="adminArea text-center">
                <small><a href="{{ url('/areaAdmin') }}"><b>Area del administrador</b> (<?php echo auth()->user()->name; ?>)
                </a></small>
            </div>
        @endif   
    </footer>
    </body>
</html>