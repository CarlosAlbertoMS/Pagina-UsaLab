@extends('layouts.main')

@section('cssp')
<!-- Hoja de estilos de la ventana "Servicios: Industria" -->
<link rel="stylesheet" href="{{ asset('css/servicios-industria.css') }}">

<!-- Hoja de estilos de la sección "Servicios para la industria" -->
<link rel="stylesheet" href="{{ asset('css/components/servicios-industria/servicios-para-la-industria.css') }}">

<!-- Hoja de estilos de la sección "Estudios de Usabilidad" -->
<link rel="stylesheet" href="{{ asset('css/components/servicios-industria/estudios-de-usabilidad.css') }}">

<!-- Hoja de estilos de la sección "Técnicas para llevar a cabo los estudios de usabilidad" -->
<link rel="stylesheet" href="{{ asset('css/components/servicios-industria/tecnicas-de-estudio-de-usabilidad.css') }}">

<!-- Hoja de estilos de la sección "Hablanos" -->
<link rel="stylesheet" href="{{ asset('css/components/hablanos.css') }}">
@endsection

@section('title','Servicios: Industria')

@section('content')
    <!-- Contenedor para la ventana Servicios: Industria -->
    <div class="servicios-industria-window-container">
        <!-- Contenedor para la sección "Servicios: Industria" (Titulo y descripción) -->
        <div class="servicios-industria-container">
            <!-- Carrousel -->
            @section('img')
            <div class="carousel-item">
                <img class="d-block w-10 img1" src="{{ asset('photos/slide3.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-10 img1" src="{{ asset('photos/slide4.png') }}" alt="Third slide">
            </div>
            <div class="carousel-item active">
                <img class="d-block w-10 img1" src="{{ asset('photos/slide8.png') }}" alt="Fourth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-10 img1" src="{{ asset('photos/slide1.png') }}" alt="First slide">
            </div>
            @endsection
    
            <!-- Titulo "Servicios: Industria" -->
            @section('tituloc')
            <br><br>Servicios: Industria
            @endsection
    
            <!-- Descripción de la página Servicios: Industria -->
            @section('contc','En UsaLab, el Laboratorio de Usabilidad de la UTM, promovemos la usabilidad y la interacción humano-computadora (HCI). Apoyamos a la academia e industria con servicios que mejoran la experiencia del usuario y el diseño de interfaces, satisfaciendo las necesidades de estudiantes, investigadores y empresas.')
        </div>

        <!-- Sección "Servicios para la industria" -->        
        <x-servicios-industria.servicios-para-la-industria />

        <div class="separador1"></div>

        <!-- Sección "Estudios de Usabilidad" -->
        <x-servicios-industria.estudios-de-usabilidad />
        
        <!-- Sección "Técnicas para llevar a cabo los estudios de usabilidad" -->
        <x-servicios-industria.tecnicas-de-estudio-de-usabilidad />

        <!-- Sección "Hablanos" -->
        <x-hablanos />

    </div>
@endsection