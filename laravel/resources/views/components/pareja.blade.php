@extends('layout.parent')

@section('title', 'Parejas')

@section('content')

<!-- CSS -->
<link href="{{ asset('CSS/pareja.css') }}" rel="stylesheet">

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
    <div>
        
    <!-- JS -->
    <script src="{{ asset('JS/Parejas.js') }}"></script>
    @foreach ($mujeres as $obj)
        <?php
            App\Http\Controllers\JuegoController::saveMujer(auth()->user()->id, $obj->Mujeres_Id);
        ?>   
        @endforeach
@stop