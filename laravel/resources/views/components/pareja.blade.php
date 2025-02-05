@extends('layout.parent')

@section('title', 'Parejas')

@section('content')

<!-- CSS -->
<link href="{{ asset('css/pareja.css') }}" rel="stylesheet">

    <div class="container">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="modo" content="{{ $modo }}" />
    

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
                
                <img src="../images/fotos_de_mujeres/{{$obj->Img_Ruta}}">
                
            </li>
            <li class="card" type="{{$obj->Mujeres_Id}}">
                
                <img src="../images/fotos_de_mujeres/{{$obj->Img_Ruta}}">
                
            </li>
        @endforeach
        </ul>  

    </div>

    <div id="popup1" class="overlay">
        <div class="popup">
            <a class="btn close" href="{{ route('empezarParejas', ['modo'=>$modo])}}" >×</a>
            <h1>ENHORABUENA</h1>
            <div class="content-1">
                Has conseguido acabar el juego en
            </div>
            <div class="content-2">
                <p><span id=finalMove> </span> movimientos y <span id=totalTime> </span> </p>
            </div>
            <a class="underlineHover" href="{{ route('empezarParejas', ['modo'=>$modo])}}">Volver a Jugar</a>
        </div>            
    </div>
        
    <!-- JS -->
    <script src="{{ asset('JS/Parejas.js') }}"></script>
    
@stop