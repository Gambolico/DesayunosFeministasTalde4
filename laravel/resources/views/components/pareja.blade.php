@extends('layout.parent')

@section('title', 'Parejas')

@section('content')

<!-- CSS -->
<link href="{{ asset('css/pareja.css') }}" rel="stylesheet">

    <div class="container">

    <h1>Encuentra las Parejas</h1>
    
    <section class="score-panel">
        <ul class="stars">
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
        </ul>

        <span class="moves">0</span> Move(s)

        <div class="timer">
        </div>

        <div class="restart" onclick=startGame()>
            <i class="fa fa-repeat"></i>
        </div>
    </section>

        <ul class="deck" id="card-deck">
        @foreach ($mujeres as $obj)
            <li class="card" type="{{$obj->Mujeres_Id}}">
                <i class="">
                <img src="../images/fotos de mujeres/{{$obj->Img_Ruta}}">
                </i>
            </li>
            <li class="card" type="{{$obj->Mujeres_Id}}">
                <i class="">
                <img src="../images/fotos de mujeres/{{$obj->Img_Ruta}}">
                </i>
            </li>
        @endforeach
        </ul>  

    </div>

    <div id="popup1" class="overlay">
            <div class="popup">
                <a class="close" href=# >×</a>
                <div class="content-1">
                    Enhorabuena, has terminado el juego.
                </div>
                <div class="content-2">
                    <p>Has hecho <span id=finalMove> </span> movimientos </p>
                    <p>en <span id=totalTime> </span> </p>
                    <p><span id=starRating></span></p>
                </div>
                <a class="underlineHover" href="{{ route('empezarParejas', ['modo'=>$modo])}}">¿Ya tienes cuenta?</a>
            </div>
        </div>
        
    <!-- JS -->
    <script src="{{ asset('JS/Parejas.js') }}"></script>
    @foreach ($mujeres as $obj)
        <?php
            App\Http\Controllers\JuegoController::saveMujer(auth()->user()->id, $obj->Mujeres_Id);
        ?>   
        @endforeach
@stop