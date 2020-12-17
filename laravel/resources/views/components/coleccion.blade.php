@extends('layout.parent')

@section('title', 'Coleccion')

@section('content')

<!-- Biografia -->
<link href="{{ asset('CSS/biografia.css') }}" rel="stylesheet">
<!-- JS filter -->
<script src="{{ asset('JS/Biografia.js') }}"></script>
<!-- CSS -->
<link href="{{ asset('css/coleccion.css') }}" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

<!-- Filtro de cartas -->
<!-- k t calles -->
    <div class="filtro row">
            <div class="col-xl-4 my-3">
            <select id="sel-bs" class="mdb-select md-form" multiple searchable="Search for...">
                <option value="" disabled selected>Seleccionar categorias</option>
                <option value="0">Todas</option>
                <!-- Apartado bd -->
                @foreach($Ambitos as $obj)
                <option value="{{$obj->Id_Ambito}}">{{ $obj->Nombre_Ambito}}</option>
                @endforeach
            </select>
            </div>
            <div class="col-xl-6 my-3">
            <button class="btn-save btn btn-primary btn-sm">Save</button>
        </div>
    </div>

    <!-- Modal para la biografia de la carta seleccionada -->
    <!-- Composicion del modal de biografia-->
    <script type="text/x-template" id="modal-template">
        <div name="modal">
            <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container">
                <div class="modal-header">
                    <slot name="header">
                    </slot>
                </div>

                <div class="modal-body">
                    <slot name="body">
                    </slot>
                </div>

                <div class="modal-footer">
                    <slot name="footer">
                    default footer
                    <button class="modal-default-button" @click="$emit('close')">
                        OK
                    </button>
                    </slot>
                </div>
                </div>
            </div>
            </div>
</div>
    </script>
    <!-- app para el vue -->
    <div id="app">
    <!-- Seccion de las cartas -->
    <div class="mujeres">   
        <div class=" mujeres row">
        @foreach($Mujeres as $obj)
            <!-- Para abrir el modal al elegir carta-->
            <div id="{{$obj->Mujeres_Id}}" id="show-modal" @click="showModal = true" class="col-md-3">
                <div class="card card-blog">
                    <div id="{{$obj->Ambito_Id}}" class="card-image" style="backgroundClor={{color}}">
                        <a href="#"> <img class="img" src="{{ $obj->Img_Ruta}}"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="table">
                        <p lass="category text-warning">
                            <i class="fa fa-soundcloud"></i> {{ $obj->Nombre_Ambito}}
                        </p>
                        <h6 class="card-caption">
                            <a href="#">{{ $obj->Nombre}} {{ $obj->Apellido}}</a>
                        </h6>
                        <div class="ftr">
                            <div class="stats"> <i class="fa fa-clock-o"></i> {{ $obj->Fecha_Nacimiento}} </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach 
        </div>
    </div>
    <!-- Para cerrar el modal -->
        <!-- use the modal component, pass in the prop -->
        <modal v-if="showModal" @close="showModal = false">
            <!--
            you can use custom content here to overwrite
            default content
            -->
            <h3 slot="header">custom header</h3>
        </modal>
    </div>

@stop