@extends('layout.parent')

@section('title', 'Coleccion')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Biografia -->
<link href="{{ asset('CSS/biografia.css') }}" rel="stylesheet">
<!-- JS filter -->
<script src="{{ asset('JS/Biografia.js') }}"></script>
<script src="{{ asset('JS/Cartas.js') }}"></script>
<!-- CSS -->
<link href="{{ asset('CSS/coleccion.css') }}" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
<script src="https://cdn.jsdelivr.net/vue.resource/1.3.1/vue-resource.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.1/vue-resource.min.js"></script>

<!-- Filtro de cartas -->
    <div class="filtro row">
        
        <div class="col-md-4 my-3">
        <select class="mdb-select colorful-select dropdown-primary md-form" id="select" multiple searchable="Search here..">
            <option value="" disabled selected>Seleccione ámbito</option>d
            @foreach($Ambitos as $obj)
            <option value="{{$obj->Id_Ambito}}">{{$obj->Nombre_Ambito}}</option>
            @endforeach
        </select>
        <!-- <div class="row-md-2 my-2">
        <div class="col-md-5 my-3">
        <select class="mdb-select colorful-select dropdown-primary md-form w-10" >
                <option value="" disabled selected>Elementos</options>
                <option value="3">3</options>
                <option value="6">6</options>
                <option value="9">9</options>
                <option value="12">12</options>
            </select>
        </div>
            
        </div> -->
        
        </div>
        <div class="col-md-6 my-3">
                <div class="input-group stylish-input-group">
                    <input type="text" id="search" name="search" class="form-control"  placeholder="Search..." >
                    
                </div>
                
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
                            <slot name="header"></slot>
                        </div>
                        <div class="modal-body">
                        <img class="img" src="">
                            <a href="#"></a>
                        </div>
                        <div class="modal-footer">
                            <slot name="footer">default footer
                            <button class="modal-default-button" @click="$emit('close')">OK</button>
                            </slot>
                        </div>
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
        <a  id='cantidad'></a> <br> 
        <div class=" mujeres row" id='carta'>
            <!-- Para abrir el modal al elegir carta-->
            <!-- Aqui vn las cartas -->
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="JS/Coleccion.js"></script>

@stop