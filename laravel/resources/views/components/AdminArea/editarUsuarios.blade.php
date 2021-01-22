<!doctype html>
<html lang="en">
    <head>
        <title>Editar Usuarios</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="{{ asset('CSS/añadirMujeres.css') }}" rel="stylesheet">  
    </head>
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
            <div class="container">
                <div class="row">
                @if ( session('error') )
                    <div class="alert alert-success">{{ session('error') }}</div>
                @endif
                    <div class="col-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Correo Electronico</th>
                                    <th scope="col">Fechad de Creacion</th>
                                    <th scope="col">Administrador</th>
                                    <th scope="col">Admin & Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Users as $obj)
                                    <tr>
                                        <th scope="row">{{$obj->name}}</th>
                                        <td>{{$obj->email}}</td>
                                        <td>{{$obj->created_at}}</td>
                                        <td><?php if($obj->is_admin == 1){
                                                echo "Si";
                                                } else{
                                                    echo "No";
                                                }?>
                                        </td>
                                        <td>
                                        <a href="{{ route('EditarUsuario', ['id'=>$obj->id])}}" class="btn btn-primary" 
                                        data-toggle="modal" data-target="#create" id="editar" data-user="{{$obj}}">EDITAR</a>
                                    <!-- <a href="{{ route('EditarUsuario', ['id'=>$obj->id])}}" class="btn btn-primary">EDITAR</a> -->
                                        <a href="{{ route('EliminarUsuario', ['id'=>$obj->id])}}" class="btn btn-primary">ELIMINAR</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Modal para editar el ususario -->
                        <div class="modal fade" id="create">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span>×</span>
                                        </button>
                                        <h4>Editar Usuario</h4>
                                    </div>
                                    <div class="modal-body">
                                    <form name="formulario" id="formulario" method="POST" action="{{ route('AgregarUsuario') }}">
                                        @csrf
                                        {{-- @foreach ($Users as $obj) --}}
                                        
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>Nombre de Usuario</label>
                                                    <input type="text" class="form-control" name="username" id="username" value="">
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>Correo Electronico</label>
                                                    <input type="text" class="form-control" name="email" id="email" placeholder="Correo Electronico">
                                                </div>
                                                <!-- Editar Contraseñas -->
                                                <input class="form-check-input" type="radio" name="Admin"/>
                                                <label class="form-check-label" for="flexCheckDefault" style="color: grey">Si deseas cambiar la contraseña</label>
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
                                                    <input id='admin1' class="form-check-input" type="radio" name="Admin" value="1"/>
                                                    <!-- checkbox -->
                                                    <label class="form-check-label" for="flexCheckDefault">NO</label>
                                                    <input id='admin0' class="form-check-input" type="radio" name="Admin" value="0"/>
                                                </div>
                                            </div>
                                        {{-- @endforeach --}}
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" value="Guardar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>

    <!-- JS -->
    <script src="{{ asset('JS/Admin.js') }}"></script>

    </body>
</html>