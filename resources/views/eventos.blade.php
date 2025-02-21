@extends('layouts.main')

@section('cssp')
    <!-- Hoja de estilos para el titulo de la sección "Proximos eventos" -->
    <link href="{{ asset('css/components/eventos/proximosEventos.css') }}" type="text/css" rel="stylesheet">
    <!-- Hoja de estilos para la sección "ultimos-eventos" -->
    <link href="{{ asset('css/components/eventos/ultimos-eventos.css') }}" type="text/css" rel="stylesheet">
    <!-- Hoja de estilos para la sección "cursos   " -->
    <link href="{{ asset('css/components/eventos/cursos.css') }}" type="text/css" rel="stylesheet">
     <!-- Hoja de estilos para el Cponente "CardsEventos" -->
     <link href="{{ asset('css/components/eventos/cardsEventos.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('title', 'Investigaciones')
@section('content')
<!-- Contenedor para la ventana Investigación -->
<div class="eventos-window-container">
    <!-- Contenedor para la sección "Investigación" (Titulo y descripción) -->
    <div class="eventos-container">
        <!-- Carrousel -->
        @section('img')
            <div class="carousel-item active">
                <img class="d-block w-10 img1" src="{{ asset('photos/slide8.png') }}" alt="Fourth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-10 img1" src="{{ asset('photos/slide1.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-10 img1" src="{{ asset('photos/slide3.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-10 img1" src="{{ asset('photos/slide4.png') }}" alt="Third slide">
            </div>
        @endsection

        <!-- Titulo "Eventos -->
        @section('tituloc')
            <br><br>Eventos
        @endsection

        <!-- Descripción de la página Eventos -->
        @section('contc', 'La investigación en UsaLab impulsa el avance en usabilidad e interacción humano-computadora (HCI). Nos enfocamos en contribuir al ámbito académico y ofrecer soluciones innovadoras para desafíos en el diseño de sistemas y productos interactivos, explorando nuevas metodologías y evaluando tecnologías emergentes.')
                </div>
                <!-- Sección "Ultimos Eventos" -->
                <x-eventos.ultimos-eventos />
                <!-- Sección "Proximos eventos y conferencias" -->
                <x-eventos.proximos-eventos />
                <!-- Subsección "Talleres" -->
                <x-eventos.talleres />
                <!-- Subsección "Talleres" -->
                <x-eventos.cursos /> 

            </div>
        @endsection