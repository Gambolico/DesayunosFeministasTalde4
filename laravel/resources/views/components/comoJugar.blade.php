@extends('layout.parent')

@section('title', 'Como jugar')

@section('content')

<!-- CSS -->
<link href="{{ asset('CSS/comoJugar.css') }}" rel="stylesheet">

<div class="container" class="slideshow-container">
    <div>
        <h1>COMO JUGAR</h1>
    </div>
    <!-- <div class="row">
        <div class="col">
            <img src="https://i.blogs.es/16b022/canada-stock-01/450_1000.jpg" width="" >
        </div>
        <div class="col">
        Lorem ipsum dolor sit amet consectetur adipiscing elit,
        curae habitant mattis vitae odio himenaeos neque venenatis,
        rutrum tincidunt justo ullamcorper aliquet bibendum.
        Pharetra habitasse nibh leo nisi nascetur erat lacus purus
        suscipit tortor arcu cubilia, faucibus varius eu porttitor senectus
        sociis semper non nulla potenti diam cursus, ultricies velit id ad nec 
        sagittis dis curae interdum ante vivamus. Hendrerit morbi nibh commodo 
        hac euismod, varius diam penatibus.
        </div>
    <div> -->
    <div class="container2">
        <img src="../images/modalidad.png" class="image" style="width:100%">
        <div class="middle">
            <div class="text">
                Elige el modo de juego que quieras!
            </div>
        </div>
    </div>

    <a href="{{ url('/elegirModo') }}" class="btn boton">EMPEZAR A JUGAR</a>
</div>
@stop