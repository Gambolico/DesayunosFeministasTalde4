@extends('layout.parent')

@section('title', 'Parejas')

@section('content')

<!-- CSS -->
<link href="{{ asset('CSS/pareja.css') }}" rel="stylesheet">

    <div class="container">
        <section class="memory-game">
            <div class="memory-card" data-framework="CartaUno">
                <img class="front-face" src="{{url('/images/mii/markel.png')}}" alt="Markel" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="CartaUno">
                <img class="front-face" src="{{url('/images/mii/markel.png')}}" alt="Markel" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>

            <div class="memory-card" data-framework="CartaDos">
            <img class="front-face" src="{{url('/images/mii/kaiet.png')}}" alt="Kaiet" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="CartaDos">
            <img class="front-face" src="{{url('/images/mii/kaiet.png')}}" alt="Kaiet" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>

            <div class="memory-card" data-framework="CartaTres">
            <img class="front-face" src="{{url('/images/mii/oihane.png')}}" alt="Oihane" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="CartaTres">
            <img class="front-face" src="{{url('/images/mii/oihane.png')}}" alt="Oihane" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>

            <div class="memory-card" data-framework="ember">
                <img class="front-face" src="../img/ember.svg" alt="Ember" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="ember">
                <img class="front-face" src="../img/ember.svg" alt="Ember" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>

            <div class="memory-card" data-framework="backbone">
                <img class="front-face" src="../img/backbone.svg" alt="Backbone" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="backbone">
                <img class="front-face" src="../img/backbone.svg" alt="Backbone" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>

            <div class="memory-card" data-framework="react">
                <img class="front-face" src="../img/react.svg" alt="React" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="react">
                <img class="front-face" src="../img/react.svg" alt="React" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>

            <div class="memory-card" data-framework="html">
                <img class="front-face" src="../img/html.svg" alt="HTML" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="html">
                <img class="front-face" src="../img/html.svg" alt="HTML" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>

            <div class="memory-card" data-framework="css">
                <img class="front-face" src="../img/css.svg" alt="CSS" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="css">
                <img class="front-face" src="../img/css.svg" alt="CSS" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="php">
                <img class="front-face" src="../img/php.svg" alt="PHP" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
            <div class="memory-card" data-framework="php">
                <img class="front-face" src="../img/php.svg" alt="PHP" />
                <img class="back-face" src="{{url('/images/Card2.png')}}" alt="Carta"/>
            </div>
        </section>
    <div>
        
    <!-- JS -->
    <script src="{{ asset('JS/Parejas.js') }}"></script>
@stop