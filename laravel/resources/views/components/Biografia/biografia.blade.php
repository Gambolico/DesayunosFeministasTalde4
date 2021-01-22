@extends('layout.parent')

@section('title', 'Coleccion')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<!-- CSS -->
<link href="{{ asset('CSS/biografia.css') }}" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.1/vue-resource.min.js"></script>
<script src="{{ asset('JS/Biografia.js') }}"></script>

<div class="containerBiografia p-3 my-3 bg-light"> 
        @foreach($Mujer as $obj)
        <div class="row h-auto" id="contenidoBio">
            <div class="col col-3">
                <a><img src="/images/fotos_de_mujeres/{{$obj->Img_Ruta}}" class="img-fluid" style="border:solid 5px {{$obj->Cod_Color}}" ></a> 
            </div>
            <div class="col col-8">
                <div class="row text-left">
                    <div class="col">
                        <h1>{{$obj->Apellido}}, {{$obj->Nombre}} </h1> <hr style="color:{{$obj->Cod_Color}}" SIZE="5">
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
<!-- template for the modal component -->


    <!-- app -->
    <div id="app">
    <a id="show-modal" @click="showModal = true" href="#">+Info</a>
    <!-- use the modal component, pass in the prop -->
    <modal v-if="showModal" @close="showModal = false">
        <!--
        you can use custom content here to overwrite
        default content
        -->
        <h3 slot="header">Advertencia!</h3>
    </modal>
    </div>

<script type="text/x-template" id="modal-template">
    <transition name="modal">
        <div class="modal-mask">
        <div class="modal-wrapper">
            <div class="modal-container">

            <div class="modal-header">
                <slot name="header">
                Advertencia!
                </slot>
            </div>

            <div class="modal-body">
                <slot name="body">
                Si esta biografía cadece de algun tipo de dato, se debe a la falta del mismo en internet.<br><br>
                Si tiene informacion que pueda ayudar a completar esta biografía, por favor pongase en contacto con <a href="https://desayunosfeministascantabria.wordpress.com/contacto/">desayunosfeministascantabria.wordpress.com</a>
                </slot>
            </div>

            <div class="modal-footer">
                <slot name="footer">
                <button class="btn boton" @click="$emit('close')">
                    Entendido!
                </button>
                </slot>
            </div>
            </div>
        </div>
        </div>
    </transition>
</script>
@stop