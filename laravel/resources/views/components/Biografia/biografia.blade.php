@extends('layout.parent')

@section('title', 'Biografia')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<!-- CSS -->
<link href="{{ asset('CSS/biografia.css') }}" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.1/vue-resource.min.js"></script>
<script src="https://cdn.jsdelivr.net/vue/latest/vue.js"></script>
<script src="{{ asset('JS/Biografia2.js') }}"></script>
ç
<div class="containerBiografia p-3 my-3 bg-light" id='containerBiografia' > 
        @foreach($Mujer as $obj)
        <div class="row h-auto" id="contenidoBio">
            <div class="col col-3">
                <a><img src="/images/fotos_de_mujeres/{{$obj->Img_Ruta}}" class="img-fluid" style="border:solid 5px {{$obj->Cod_Color}}" ></a> 
            </div>
            <div class="col col-8">
                <div class="row text-left">
                    <div class="col">
                        <div class="row">
                            <div class="col-7"><h1 class='ml-5'>{{$obj->Apellido}}, {{$obj->Nombre}} </h1><hr style="color:{{$obj->Cod_Color}}" SIZE="5"></div>
                            <div class="col-3"><img v-if="ambito!='N/A'" :src='imageLink' height="120px"width="80px"></div>
                        
                        
                        
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <div class="row">
                                    <div class="col col-7">
                                        <b>Ámbito:</b>
                                    </div>
                                    <div class="col col-3 text-dark">
                                        <input class="text-dark" type='text' v-model='ambito' name='{{$obj->Nombre_Ambito}}' id='ambito' disabled>
                                        
                                    </div>
                                    <div class="col col-3">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-7">
                                        <b>Continente: </b>
                                    </div>
                                    <div class="col col-3">
                                        <input class="text-dark"  type='text' v-model='continente' :value='continente'name="{{$obj->Nombre_Continente}}" id='continente' disabled>
                                        
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col col-7">
                                        <b>Zona Geográfica: </b>
                                    </div>
                                    <div class="col col-3">
                                        <input class="text-dark"  type='text' v-model="zona" name="{{$obj->Zona_Geografica}}" id='zona'disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-7">
                                        <b>Fecha de nacimiento: </b>
                                    </div>
                                    <div class="col col-3">
                                        <input class="text-dark"  type='text' v-model="nac" name="{{$obj->Fecha_Nacimiento}}" id='nac' disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-7">
                                        <b>Fecha de muerte: </b>
                                    </div>
                                    <div class="col col-3">
                                        <input class="text-dark"  type='text' v-model="muer" name="{{$obj->Fecha_Muerte}}" id='muer'  disabled>
                                    </div>
                                </div>
                            </div>
                            
                        <div class="col col-6"> 
                        
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
        

<!-- template for the modal component -->
    <!-- app -->
    <div id="appEx">
        <a id="show-modal" v-on:click="changeModal" href="#">+Info</a>
        <!-- use the modal component, pass in the prop -->
        <modal v-if="showModal" @close="showModal = false">
            <!--
            you can use custom content here to overwrite
            default content
            -->
            <h3 slot="header">Advertencia!</h3>
        </modal>
    </div>
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