<!doctype html>
<html lang="en">
    <head>
        <title>Agregar Usuarios</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>    
        <link href="{{ asset('CSS/añadirMujeres.css') }}" rel="stylesheet">   

    <body>
		<div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
				<div class="p-4 pt-5">
	                <h2><a href="index.html" class="logo">Desayunos Feministas</a></h2>
	                <ul class="list-unstyled components mb-5">
                        <li>
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Mujeres</a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li>
                                    <a href="{{ route('AñadirMujeres') }}">Añadir Mujeres</a>
                                </li>
                                <li>
                                    <a href="{{ route('EliminarMujeres') }}">Eliminar Mujeres</a>
                                </li>
                            </ul>
	                    </li>
                        <li>
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Usuarios</a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li>
                                    <a href="{{ route('EditarUsuarios') }}">Editar Usuarios</a>
                                </li>
                                <li>
                                    <a href="{{ route('AgregarUsuarios') }}">Agregar Usuarios</a>
                                </li>
                            </ul>
	                    </li>
                        <li>
                            <a href="{{ url('/') }}">Pagina Principal</a>
                        </li>
                    </ul>
                    <div class="footer">
                        <p>
                            <a>Copyright &copy; Desayunos Feministas | <script>document.write(new Date().getFullYear());</script></a>
                        </p>
                    </div>
	            </div>
    	    </nav>

        <!-- Page Content  -->
        <div id="content" class="p-md-5">
            <!-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif -->

        @if ( session('error') )
                <div class="alert alert-success">{{ session('error') }}</div>
        @endif

            <form name="formulario" id="formulario" method="POST" action="{{ route('AgregarUsuario') }}">
                @csrf
                
                <div class="form-row">
                    <div class="form-group col-md-6 mb-3">
                        <label>Nombre de Usuario</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de Usuario">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label>Correo Electronico</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Correo Electronico">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label>Repetir Contraseña</label>
                        <input type="password" class="form-control" name="password_confirmation"
                        id="password_confirmation" placeholder="Repetir Contraseña">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label>Administrador</label><br>
                        <!-- checkbox -->
                        <label class="form-check-label" for="flexCheckDefault">SI</label>
                        <input class="form-check-input" type="radio" name="Admin" value="1"/>
                        <!-- checkbox -->
                        <label class="form-check-label" for="flexCheckDefault">NO</label>
                        <input class="form-check-input" type="radio" name="Admin" value="0" checked/>
                    </div>
                    <button type="submit" class="btn btn-primary">Añadir</button>
                </div>
            </form>
        </div>

    <!-- JS -->
    <script src="{{ asset('JS/Admin.js') }}"></script>

    </body>
</html>