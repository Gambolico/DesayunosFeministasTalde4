@extends('layout.parent')
@section('title', 'Coleccion')
@section('content')

<!-- Coleccion -->
<link href="{{ asset('css/coleccion.css') }}" rel="stylesheet">

<script>
    $(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>

<div class=" filtro row">
                <div class="col-md-12">
                <div class="form-group">
                <label for="demo_overview">Select one or more countries</label>
                    <select id="demo_overview" class="form-control" data-role="select-dropdown" multiple>
                    <!-- options -->
                    </select>
                </div>

                </div>
            </div>
        <div class="mujeres">        
            
                <div class=" mujeres row">
                @foreach($Mujeres as $obj)
                    <div class="col-md-4">
                            <div class="card card-blog">
                                    <div class="card-image">
                                        <a href="#"> <img class="img" src="{{ $obj->Img_Ruta}}"> </a>
                                        <div class="ripple-cont"></div>
                                    </div>
                                    <div class="table">
                                        <h6 class="category text-warning">
                                            <i class="fa fa-soundcloud"></i> {{ $obj->Apellido}}
                                        </h6>
                                        <h4 class="card-caption">
                                            <a href="#">{{ $obj->Nombre}} {{ $obj->Apellido}}</a>
                                        </h4>
                                        <div class="ftr">
                                            <div class="stats"> <i class="fa fa-clock-o"></i> {{ $obj->Nombre}} </div>
                                            <div class="stats"> <i class="fa fa-clock-o"></i> 15 min </div>
                                        </div>
                                    </div>
                                
                            </div>
                    </div>
                    @endforeach 
                </div>
        </div>

    
</body>
    
@stop