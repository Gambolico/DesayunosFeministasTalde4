@extends('layout.parent')

@section('title', 'Como jugar')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active bg-dark p-5 mt-5">
      <img class="d-block w-100" src="images/comoJugar1.png" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h4>HAZ CLIC EN JUGAR</h4>
        <p>Puedes hacerlo en el menú superior o en la pantalla principal</p>
      </div>
    </div>
    <div class="carousel-item bg-dark p-5 mt-5">
      <img class="d-block w-100" src="images/comoJugar2.png" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h4>ELIGE UN MODO</h4>
          <p>Elige entre modo HISTORIA o LIBRE</p>
        </div>
    </div>
    <div class="carousel-item bg-dark p-5 mt-5">
      <img class="d-block w-100" src="images/comoJugar3.png" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h4>SELECCIONA EL JUEGO QUE QUIERAS</h4>
          <p>Hay 2 juegos disponibles: ADIVINA y PAREJAS</p>
        </div>
    </div>
    <div class="carousel-item bg-dark p-5 mt-5">
      <img class="d-block w-100" src="images/comoJugar4.png" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h4>ENCUENTRA LAS PAREJAS</h4>
          <p>Haz click en las cartas y estas se voltearán</p>
        </div>
    </div>
    <div class="carousel-item bg-dark p-5 mt-5">
      <img class="d-block w-100" src="images/comoJugar5.png" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h4>ENCUENTRA LAS PAREJAS</h4>
          <p>Cuando las cartas sean iguales estás se mantendrán
            boca arriba y tendrán un marco amarillo.
            Si no lo son el marco <br> se pondrá de color rojo y
            volverán a girarse.
            Debes voltear todas para completar el juego.
          </p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
@stop