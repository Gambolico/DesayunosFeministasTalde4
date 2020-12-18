@extends('layout.parent')

@section('title', 'Parejas')

@section('content')

<!-- CSS -->
<link href="{{ asset('CSS/pareja.css') }}" rel="stylesheet">

    <div class="container">
        <section class="memory-game">
            <div class="memory-card" data-framework="CartaUno">
                <img class="front-face" src="{{url('/images/mii/Markel.png')}}" alt="Markel" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="CartaUno">
                <img class="front-face" src="{{url('/images/mii/Markel.png')}}" alt="Markel" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>

            <div class="memory-card" data-framework="CartaDos">
            <img class="front-face" src="{{url('/images/mii/Kaiet.png')}}" alt="Kaiet" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="CartaDos">
            <img class="front-face" src="{{url('/images/mii/Kaiet.png')}}" alt="Kaiet" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>

            <div class="memory-card" data-framework="CartaTres">
            <img class="front-face" src="{{url('/images/mii/Oihane.png')}}" alt="Oihane" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="CartaTres">
            <img class="front-face" src="{{url('/images/mii/Oihane.png')}}" alt="Oihane" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>

            <div class="memory-card" data-framework="CartaCuatro">
                <img class="front-face" src="{{url('/images/mii/Mikel.png')}}" alt="Mikel" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="CartaCuatro">
                <img class="front-face" src="{{url('/images/mii/Mikel.png')}}" alt="Mikel" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>

            <div class="memory-card" data-framework="CartaCinco">
                <img class="front-face" src="{{url('/images/mii/nondefined.png')}}" alt="Angela" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="CartaCinco">
                <img class="front-face" src="{{url('/images/mii/nondefined.png')}}" alt="Angela" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>

            <div class="memory-card" data-framework="CartaSeis">
                <img class="front-face" src="{{url('/images/mii/Angeles.png')}}" alt="Angeles" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="CartaSeis">
                <img class="front-face" src="{{url('/images/mii/Angeles.png')}}" alt="Angeles" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>

            <div class="memory-card" data-framework="CartaSiete">
                <img class="front-face" src="{{url('/images/mii/Aurelio.png')}}" alt="Aurelio" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="CartaSiete">
                <img class="front-face" src="{{url('/images/mii/Aurelio.png')}}" alt="Aurelio" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>

            <div class="memory-card" data-framework="CartaOcho">
                <img class="front-face" src="{{url('/images/mii/gatete.png')}}" alt="Gatete" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="CartaOcho">
                <img class="front-face" src="{{url('/images/mii/gatete.png')}}" alt="Gatete" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="CartaNueve">
                <img class="front-face" src="{{url('/images/mii/perrete.png')}}" alt="Perrete" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="CartaNueve">
                <img class="front-face" src="{{url('/images/mii/perrete.png')}}" alt="Perrete" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
        </section>
    <div>
        
    <!-- JS -->
    <script src="{{ asset('JS/Parejas.js') }}"></script>
@stop