@extends('layout.parent')
@section('title', 'Coleccion')
@section('content')
<style>
    .coleccion{
        display:flex;
        width:50px;
        height:50px;
    }
    .exterior{
        
    }
</style>
    <p>Coleccion.</p>
    <div class="coleccion">
    @foreach($Mujeres as $obj)
            <div class="exterior">
            <div class="interior">
                <p class="text-center">{{ $obj->Nombre}}</p>
                <p class="text-center">{{ $obj->Apellido}}</p>
                <p class="text-center">{{ $obj->Img_Ruta}}</p>
                <p class="text-center">{{ $obj->Zona_Geografica}}</p>
            </div>

            </div>
        @endforeach 
    </div>
@stop