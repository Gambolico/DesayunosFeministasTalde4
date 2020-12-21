@extends('layout.parent')

@section('title', 'Parejas')

@section('content')

<!-- CSS -->
<link href="{{ asset('css/pareja.css') }}" rel="stylesheet">

    <div class="container">
        <section class="memory-game">

        @foreach ($mujeres as $obj)
            <div class="memory-card" data-framework="{{$obj->Mujeres_Id}}">
                <img class="front-face" src="../images/fotos de mujeres/{{$obj->Img_Ruta}}"/>
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="{{$obj->Mujeres_Id}}">
                <img class="front-face" src="../images/fotos de mujeres/{{$obj->Img_Ruta}}"/>
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
        @endforeach
            
        </section>
    </div>

    <!-- <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Congratulations 🎉</h2>
                <a class="close" href=# >×</a>
                <div class="content-1">
                    Congratulations you're a winner 🎉🎉
                </div>
                <div class="content-2">
                    <p>You made <span id=finalMove> </span> moves </p>
                    <p>in <span id=totalTime> </span> </p>
                    <p>Rating:  <span id=starRating></span></p>
                </div>
                <button id="play-again"onclick="playAgain()">
                    Play again 😄</a>
                </button>
            </div>
        </div> -->
        
    <!-- JS -->
    <script src="{{ asset('JS/Parejas.js') }}"></script>
@stop