@extends('layout.parent')

@section('title', 'Coleccion')

@section('content')

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.1/vue-resource.min.js"></script>

<!-- Filtro de cartas -->
    <div class="filtro row">
        <div class="col-md-4 my-3">
            <select name="ambito_id" id="sel-bs" class="mdb-select md-form" multiple searchable="Search for...">
                <option value="" disabled selected>Seleccionar categorias</option>
                <option value="0">Todas</option>
                <!-- Apartado bd -->
                @foreach($Ambitos as $obj)
                <option value="{{$obj->Id_Ambito}}">{{ $obj->Nombre_Ambito}}</option>
                @endforeach
            </select>
            <form method="get" action="">
                <div class="input-group stylish-input-group">
                    <input type="text" id="txtSearch" name="txtSearch" class="form-control"  placeholder="Search..." >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </form> 
        </div>
        <div class="col-md-6 my-3">
            <button class="btn-save btn btn-primary btn-sm">Save</button>
        </div>
    </div>

    <!-- Modal para la biografia de la carta seleccionada -->
    <!-- Composicion del modal de biografia-->
    
    <script type="text/x-template" id="modal-template">
    @foreach($Mujeres as $obj)
        <div name="modal">
            <div class="modal-mask">
                <div class="modal-wrapper">
                    <div class="modal-container">
                        <div class="modal-header">
                            <slot name="header"></slot>
                        </div>
                        <div class="modal-body">
                        <img class="img" src="images/fotos de mujeres/{{$obj->Img_Ruta}}">

                            <a href="#">{{ $obj->Nombre}} {{ $obj->Apellido}}</a>
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
@endforeach
    </script>
    <div class="input-group stylish-input-group">
        <input type="text" id="search" name="search" class="form-control"  placeholder="Search..." >
        <span class="input-group-addon">
            <button type="submit">
                <span class="glyphicon glyphicon-search"></span>
            </button>  
        </span>
    </div>
    <div class="table">
    <h3>Total data: <span id=total_records></span></h3>
        <tbody></tbody>
    </div>
    <!-- app para el vue -->
    <div id="app">
    <!-- Seccion de las cartas -->
    <div class="mujeres">   
        <div class=" mujeres row">
        @foreach($Mujeres as $obj)
            <!-- Para abrir el modal al elegir carta-->
            <div id="{{$obj->Mujeres_Id}}" id="show-modal" @click="showModal = true;" href="{{route('mujer',['id'=>$obj->Mujeres_Id])}}" class="col-md-3">
                <div class="card card-blog" style="background:{{$obj->Cod_Color}};">
                    <div id="{{$obj->Ambito_Id}}" class="card-image" >
                        <a href="#"> <img class="img" src="images/fotos de mujeres/{{$obj->Img_Ruta}}"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="table">
                        <p lass="category text-warning">
                            <i class="fa fa-soundcloud"></i> {{$obj->Nombre_Ambito}}
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
    <script type="application/javascript">
        $(document).ready(function(){
                fetch_mujeres_data();
                function fetch_mujeres_data(query= ''){
                    $.ajax({
                        url: "{{('coleccion.search')}}",
                        method:'GET',
                        data:{query:query},
                        dataType:'json',
                        success: function(data) {
                                $('tbody').html(data.table_data);
                                $('#total_records').text(data.total_data);
                            },
                        error: function(data){
                            alert("fail");
                        }
                    });
                }
    });
    </script>


@stop