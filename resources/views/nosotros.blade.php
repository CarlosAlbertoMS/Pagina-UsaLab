<!-- Exportamos el layout de la pagina principal -->
@extends('layouts.main')


<!-- Agregamos el CSS de la página -->
@section('cssp')
    <link href="{{ asset('css/nosotros.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/components/nosotros/mision-vision.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/nosotros/instalaciones.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/nosotros/equipo-cargo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/nosotros/trayectoria.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/nosotros/colaboraciones.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/nosotros/logros.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/nosotros/testimonios.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/hablanos.css') }}">
@endsection

<!-- Titulo de la pestaña de la página -->
@section('title','Nosotros')

<!-- Empieza el contenido de la página -->
@section('content')
    <!-- Carrusel de la página principal -->
    @section('img')
    <div class="carousel-item">
        <img class="d-block w-10 img1" src="{{ asset('photos/slide1.png') }}" alt="First slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-10 img1" src="{{ asset('photos/slide3.png') }}" alt="Second slide">
    </div>
    <div class="carousel-item active">
        <img class="d-block w-10 img1" src="{{ asset('photos/slide4.png') }}" alt="Third slide">
    </div>
    <div class="carousel-item">
        <img class="d-block w-10 img1" src="{{ asset('photos/slide8.png') }}" alt="Fourth slide">
    </div>
    @endsection

    @section('tituloc','Nosotros')
    @section('contc','UsaLab, fundado en 2002, se dedica a desarrollar pruebas de usabilidad tanto académicas como en colaboración con universidades de México. Además de realizar pruebas formales y fomentar la usabilidad en sus propios proyectos, ha completado más de 120 desarrollos académicos gratuitos o en convenio con otras instituciones.')

    <div class="separador2"></div>
    <!-- Seccion mision-vision -->
    <x-nosotros.mision-vision />
    
    <div class="separador2"></div>
    <!-- Contenedor Instalaciones -->
    <x-nosotros.instalaciones />
    
    <div class="separador2"></div>
    <!-- Seccion equipo a cargo -->
    <x-nosotros.equipo-cargo />
    
    <div class="separador2"></div>
    <x-nosotros.trayectoria />

    <div class="separador2"></div>
    <!-- Seccion colaboraciones -->
    <x-nosotros.colaboraciones />

    <div class="separador2"></div>
    <!-- Seccion Logros -->
    <x-nosotros.logros />

    <div class="separador2"></div>
    <!-- Seccion "Testimonios" -->
    <x-nosotros.testimonios />
    
    <div class="separador2"></div>
    <!-- Seccion hablanos -->
    <x-hablanos />
    <div class="separador2"></div>


@endsection