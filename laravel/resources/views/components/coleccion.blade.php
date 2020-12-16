@extends('layout.parent')

@section('title', 'Coleccion')

@section('content')
<body>
<!-- Filtro de cartas -->
    <div class=" filtro row">
            <div class="col-md-6 my-3">
            <select id="sel-bs" class="mdb-select md-form" multiple searchable="Search for...">
                <option value="" disabled selected>Seleccionar categorias</option>
                <option value="0">Todas</option>
                <!-- Apartado bd -->

            </select>
            <button class="btn-save btn btn-primary btn-sm">Save</button>
            </div>
    </div>
<!-- Seccion de las cartas -->
    <div class="mujeres">   
        <div class=" mujeres row">
        @foreach($Mujeres as $obj)
            <div class="col-md-3">
                <div class="card card-blog">
                    <div class="card-image">
                        <a href="#"> <img class="img" src="{{ $obj->Img_Ruta}}"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="table">
                        <h7 class="category text-warning">
                            <i class="fa fa-soundcloud"></i> {{ $obj->Apellido}}
                        </h7>
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

    
</body>
    
@stop