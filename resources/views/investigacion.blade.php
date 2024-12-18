@extends('layouts.main')

@section('cssp')
<link href="{{ asset('css/investigacion.css') }}" type="text/css" rel="stylesheet">

<!-- Hoja de estilos de la sección "Proyectos actuales" -->
<link rel="stylesheet" href="{{ asset('css/components/investigacion/proyectos-actuales.css') }}">

<!-- Hoja de estilos de la sección "Publicaciones" -->
<link rel="stylesheet" href="{{ asset('css/components/investigacion/publicaciones.css') }}">

<!-- Hoja de estilos de la sección "Líneas de investigación" -->
<link rel="stylesheet" href="{{ asset('css/components/investigacion/lineas-de-investigacion.css') }}">

<!-- Hoja de estilos de la sección "Investigaciones más destacadas" -->
<link rel="stylesheet" href="{{ asset('css/components/investigacion/investigaciones-mas-destacadas.css') }}">

<!-- Hoja de estilos de la sección "Hablanos" -->
<link rel="stylesheet" href="{{ asset('css/components/hablanos.css') }}">
@endsection

@section('title','Investigaciones')

@section('content')
    <!-- Contenedor para la ventana Investigación -->
    <div class="investigacion-window-container">
        <!-- Contenedor para la sección "Investigación" (Titulo y descripción) -->
        <div class="investigacion-container">
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
    
            <!-- Titulo "Investigeación -->
            @section('tituloc')
            <br><br>Investigaciones
            @endsection
    
            <!-- Descripción de la página Investigación -->
            @section('contc','La investigación en UsaLab impulsa el avance en usabilidad e interacción humano-computadora (HCI). Nos enfocamos en contribuir al ámbito académico y ofrecer soluciones innovadoras para desafíos en el diseño de sistemas y productos interactivos, explorando nuevas metodologías y evaluando tecnologías emergentes.')
        </div>

        <!-- Sección "Proyectos actuales" -->
        <x-investigacion.proyectos-actuales/>

        <!-- Sección "Publicaciones" -->
        <x-investigacion.publicaciones/>

        <!-- Sección "Líneas de investigación" -->
        <x-investigacion.lineas-de-investigacion/>

        <!-- Sección "Investigaciones más destacadas" -->
        <x-investigacion.investigaciones-mas-destacadas />

        <!-- Sección "Hablanos" -->
        <x-hablanos />

    </div>
@endsection