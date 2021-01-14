@extends('layout.parent')

@section('title', 'Coleccion')

@section('content')

<!-- CSS -->

<div class="containerBiografia p-3 my-3 bg-light"> 
        @foreach($Mujer as $obj)
        <div class="row h-auto">
            <div class="col col-3">
                <a><img src="/images/fotos_de_mujeres/{{$obj->Img_Ruta}}" class="img-fluid"></a> 
            </div>
            <div class="col col-8">
                <div class="row text-left">
                    <div class="col">
                        <h1>{{$obj->Apellido}}, {{$obj->Nombre}} </h1> 
                        <div class="row">
                            <div class="col-5">
                                <div class="row">
                                    <a><b>Ámbito: </b>{{$obj->Nombre_Ambito}}</a>
                                </div>
                                <div class="row">
                                    <a><b>Continente: </b>{{$obj->Nombre_Continente}}</a>
                                </div>
                                <div class="row">
                                    <a><b>Zona Geográfica: </b>{{$obj->Zona_Geografica}}</a>
                                </div>
                                <div class="row">
                                    <a><b>Fecha de nacimiento: </b>{{$obj->Fecha_Nacimiento}}</a>
                                </div>
                                <div class="row">
                                    <a><b>Fecha de muerte: </b>{{$obj->Fecha_Muerte}}</a>
                                </div>

                            </div>
                        
                        <div class="col col-7"> 
                        
                            <div class="col">
                                <div class="row">
                                    <a><b>Biografía: <br></b>{{$obj->Lore_Esp}}</a><hr>
                                </div>
                                <div class="row content-rigth">
                                <a href="{{$obj->Enlace_Referencia}}"><b>Más informacion sobre {{$obj->Nombre}} </b></a>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    
@stop