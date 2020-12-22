@extends('layout.parent')

@section('title', 'Coleccion')

@section('content')
<div class="wrapper fadeInDown">
    </div>
        <div id="formContent">
        <div class="jumbotron text-light">
            <h1>Gestion de Personajes</h1>
            <p>Esta seccion solo está disponible para administradores</p>
        </div>
            <div class="input-group stylish-input-group">
            <form class="form-inline">
                <input type="text" id="search" name="search" class="form-control"  placeholder="Search..." >
                <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
                    <option>Nombre</option>
                    <option>Apellido</option>
                </select>
                <button type="submit">Buscar</button>  
               
            </form>
            </div>
            <div class="table">
                <h3>Total data: <span id=total_records></span></h3>
                <tbody></tbody>
    </div>
        </div>
            
    </div>
</div>

@stop