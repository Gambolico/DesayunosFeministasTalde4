<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        <title>@yield('title')</title>
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            @yield('css')
        <style>
        html {
            position: relative;
            min-height: 100%;
        }
        body {
            margin-bottom: 60px; /* Margin bottom by footer height */
        }
        .navbar {
            background-color:#261343;
            color:white;          
        }
        #sticky-footer {
            background-color:#261343;
            color:white;   
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
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
            <ul class="navbar-nav mr-auto">
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
            <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item avatar">
                <a class="nav-link p-0" href="#">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
                    alt="avatar image" height="35">
                </a>
            </li>
            </ul>
        </div>
        </nav>
        <!--/.Navbar -->
    </header>

    <!--Main Layout-->
    <!-- La clase main la llamarán solo las view que tengas ese css -->
    <main >
        <div class="container">
            @yield('content')
        </div>
    </main>
    
    <!-- Footer -->
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="cFooter text-center">
            <small>Copyright &copy; Desayunos Feministas</small>
        </div>
    </footer>

    </body>
</html>