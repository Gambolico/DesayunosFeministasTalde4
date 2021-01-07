@extends('layout.parent')

@section('title', 'Coleccion')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}" />
  
<!-- Biografia -->
<link href="{{ asset('CSS/biografia.css') }}" rel="stylesheet">
<!-- JS filter -->
<script src="{{ asset('JS/Biografia.js') }}"></script>
<script src="{{ asset('JS/Cartas.js') }}"></script>
<!-- CSS -->
<link href="{{ asset('css/coleccion.css') }}" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
<script src="https://cdn.jsdelivr.net/vue.resource/1.3.1/vue-resource.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.1/vue-resource.min.js"></script>

<!-- Filtro de cartas -->
    <div class="filtro row">
        <div class="col-md-4 my-3">
            <select name="ambito_id" id="sel-bs" class="mdb-select md-form" multiple searchable="Search for...">
                <option value="" disabled selected>Seleccionar categorias</option>
                <option value="0">Todas</option>
                <!-- Apartado bd -->
                
                <option value=""></option>
            </select>
            <form >
                <div class="input-group stylish-input-group">
                    <input type="text" id="search" name="search" class="form-control"  placeholder="Search..." >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
           
        </div>
        <div class="col-md-6 my-3">
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

    <script>
        let _token = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){
            fetch_customer_data(query ='');
            $('#search').on('keyup',function(){
                var query = $(this).val();
                console.log(query)
                fetch_customer_data(query);
            }); 
        });
        function fetch_customer_data(query){
                
                $.ajax({
                    url: 'coleccionFiltrar',
                    method: 'post',
                    data: {
                        query:query,
                        _token:_token
                        
                        },
                    dataType: 'json',
                    traditional: true,
                    success:function(data)
                    {
                        $('#carta').html(data.cartas_data);
                        $('#cantidad').text(data.total_data);
                    },
                    error:function(jqXHR, status, err){
                        alert(jqXHR.responseText);
                    }
                });
             }

    </script>
    
 

@stop