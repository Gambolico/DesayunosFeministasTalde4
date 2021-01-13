@extends('components.AdminArea.parentAdmin')

@section('title', 'Area Administrador')

@section('content')

<!-- CSS -->
<link href="{{ asset('CSS/admin.css') }}" rel="stylesheet">

<div id="content" class="p-md-5">
    <!-- Añadir Mujeres -->
    <div class="card  mb-4">
        <div class="card-body">
            <h5 class="card-title">Añadir Mujeres</h5>
            <p class="card-text">Añade mujeres con su respectiva informacion (Nombre, Apellido, Imagen...)
                a la Base de Datos.</p>
            <a href="{{ route('AñadirMujeres') }}" class="btn btn-primary">Añadir</a>
        </div>
    </div>

    <!-- Eliminar Mujeres -->
    <div class="card  mb-4">
        <div class="card-body">
            <h5 class="card-title">Eliminar Mujeres</h5>
            <p class="card-text">Elimina una mujer, junto a toda su informacion de la Base de Datos.</p>
            <a href="#" class="btn btn-primary">Eliminar</a>
        </div>
    </div>

    <!-- Usuarios -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edita Usuarios</h5>
            <p class="card-text">Añade, elimina o convierte en administrador a usuarios nuevos o existentes.</p>
            <a href="#" class="btn btn-primary">Usuarios</a>
        </div>
    </div>
</div>