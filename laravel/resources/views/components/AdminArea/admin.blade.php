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
            <!-- Añadir Mujeres -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Añadir Mujeres</h5>
                    <p class="card-text">Añade mujeres con su respectiva informacion (Nombre, Apellido, Imagen...)
                        a la Base de Datos.</p>
                    <a href="#" class="btn btn-primary">Añadir</a>
                </div>
            </div><br>

            <!-- Eliminar Mujeres -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Eliminar Mujeres</h5>
                    <p class="card-text">Elimina una mujer, junto a toda su informacion de la Base de Datos.</p>
                    <a href="#" class="btn btn-primary">Eliminar</a>
                </div>
            </div><br>

            <!-- Usuarios -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edita Usuarios</h5>
                    <p class="card-text">Añade, elimina o convierte en administrador a usuarios nuevos o existentes.</p>
                    <a href="#" class="btn btn-primary">Usuarios</a>
                </div>
            </div>
        </div>
	</div>

<!-- JS -->
<script src="{{ asset('JS/Admin.js') }}"></script>
    
@stop