<!doctype html>
<html lang="en">
    <head>
        <title>Añadir Mujeres</title>
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
                            <a href="{{ route('EditarUsuarios') }}">Usuarios</a>
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
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-1">
                        <label>Nombre</label>
                        <input type="text" class="form-control" id="inputNombre" placeholder="Ejemplo: Marie" required>
                    </div>
                    <div class="form-group col-md-6 mb-1">
                        <label>Apellido</label>
                        <input type="text" class="form-control" id="inputApellido" placeholder="Ejemplo: Curie">
                    </div>
                    <div class="form-group col-md-6 mb-1">
                        <label>Año de Nacimiento</label>
                        <input type="number" class="form-control" id="inputNacimiento" placeholder="Ejemplo: 1867">
                    </div>
                    <div class="form-group col-md-6 mb-1">
                        <label>Año de Fallecimiento</label>
                        <input type="number" class="form-control" id="inputMuerte" placeholder="Ejemplo: 1934">
                    </div>
                </div>
                <div class="form-group mb-1">
                    <label>Descripcion</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" 
                    placeholder="Maria Salomea Skłodowska-Curie, ​​ más conocida como Marie Curie​​, fue una científica polaca nacionalizada francesa....">
                    </textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-1">
                        <label>Pais</label>
                        <input type="text" class="form-control" id="inputPais" placeholder="Ejemplo: Polonia/Francia">
                    </div>
                    <div class="form-group col-md-4 mb-1">
                        <label for="inputState">Continente</label>
                        <select id="inputState" class="form-control">
                        <option selected>Elige...</option>
                        <option id="1">Norte America</option>
                        <option id="2">Sudamerica</option>
                        <option id="3">Europa</option>
                        <option id="4">Africa</option>
                        <option id="5">Asia</option>
                        <option id="6">Oceania</option>
                        <option id="7">Dos continentes</option>
                        <option id="8">Desconocido</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4 mb-1">
                        <label>Ruta de la imagen</label>
                        <input type="text" class="form-control" id="inpuRuta" placeholder="Ejemplo: Imagen.jpg, Archivo.png...">
                    </div>
                    <div class="form-group col-md-4 mb-4">
                        <label for="inputState">Ambito</label>
                        <select id="inputState" class="form-control">
                        <option selected>Elige...</option>
                        <option id="1">História</option>
                        <option id="2">Derecho</option>
                        <option id="3">Antropología</option>
                        <option id="4">Geografía</option>
                        <option id="5">Filosofía</option>
                        <option id="6">Psicología</option>
                        <option id="7">Economía</option>
                        <option id="8">Sociología</option>
                        <option id="9">Pedagogía</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Añadir</button>
            </form>
        </div>
	</div>

    <!-- JS -->
    <script src="{{ asset('JS/Admin.js') }}"></script>

    </body>
</html>