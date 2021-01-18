@extends('layout.parent')

@section('title', 'Coleccion')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Biografia -->
<!-- JS filter -->
<!-- CSS -->
<link href="{{ asset('CSS/coleccion.css') }}" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" 
        crossorigin="anonymous">
</script>
<script src="jQuery-inView.min.js"></script>

<!-- Filtro de cartas -->
    <div class="filtro row">
        
        <div class="col-md-4 my-3">
        <select class="mdb-select colorful-select dropdown-primary md-form" id="select" multiple searchable="Search here..">
            <option value="" disabled selected>Seleccione ámbito</option>
            @foreach($Ambitos as $obj)
            <option value="{{$obj->Id_Ambito}}">{{$obj->Nombre_Ambito}}</option>
            @endforeach
        </select>
        <select class="form-select form-select-lg bg-transparent" id="ordenarPor" aria-label=".form-select-lg example">
            <option value="Mujeres_Id" disabled selected>Ordenar por</option>
            <option value="Id_Ambito">Ambito</option>
            <option value="Fecha_Nacimiento">Fecha de nacimiento</option>
            <option value="Nombre">Nombre</option>
            <option value="Apellido">Apellido</option>
            <option value="Zona_Geografica">Zona geográfica</option>
        </select>
        </div>
        <div class="col-md-6 my-3">
                <div class="input-group stylish-input-group">
                    <input type="text" id="search" name="search" class="form-control"  placeholder="Search..." >
                    
                </div>
                
        </div>
    </div>
    <!-- Seccion de las cartas -->
    <div class="mujeres">
        <div class="cantidad">
            <a id='cantidad'></a> <br> 
        </div>
        <div class=" mujeres row" id='carta'>
            <!-- Para abrir el modal al elegir carta-->
            <!-- Aqui vn las cartas -->
        </div>
    </div>

        <a id="masCartas">Cargar más</a>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  

    <script src="JS/Coleccion.js"></script>

@stop