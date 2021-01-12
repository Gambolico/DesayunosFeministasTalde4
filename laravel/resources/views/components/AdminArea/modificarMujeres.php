@extends('layout.parent')

@section('title', 'Coleccion')

@section('content')

<!-- CSS -->
<link href="{{ asset('CSS/admin.css') }}" rel="stylesheet">

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
                                    <a href="#">Añadir Mujeres</a>
                                </li>
                                <li>
                                    <a href="#">Eliminar Mujeres</a>
                                </li>
                            </ul>
	                    </li>
                        <li>
                            <a href="#">Usuarios</a>
                        </li>
                        <li>
                            <a href="#">Pagina Principal</a>
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
                        <input type="text" class="form-control" id="inputApellido" placeholder="Ejemplo: Curie" required>
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
                    placeholder="Maria Salomea Skłodowska-Curie, ​​ más conocida como Marie Curie​​, fue una científica polaca nacionalizada francesa...." required>
                    </textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mb-1">
                        <label>Pais</label>
                        <input type="text" class="form-control" id="inputPais" placeholder="Ejemplo: Polonia/Francia" required>
                    </div>
                    <div class="form-group col-md-4 mb-1">
                        <label for="inputState">Continente</label>
                        <select id="inputState" class="form-control" required>
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
                        <input type="text" class="form-control" id="inpuRuta" placeholder="Ejemplo: Imagen.jpg, Archivo.png..." required>
                    </div>
                    <div class="form-group col-md-4 mb-4">
                        <label for="inputState">Ambito</label>
                        <select id="inputState" class="form-control" required>
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
    
@stop