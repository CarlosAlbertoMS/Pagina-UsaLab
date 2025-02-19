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

<!-- Hoja de estilos de la sección "Consultoría en UX/UI" -->
<link rel="stylesheet" href="{{ asset('css/components/servicios-industria/consultoria-en-u-x-u-i.css') }}">

<!-- Hoja de estilos de la sección "Capacitación y Formación" -->
<link rel="stylesheet" href="{{ asset('css/components/servicios-industria/capacitacion-y-formacion.css') }}">

<!-- Hoja de estilos de la sección "Desarrollo Comercial" -->
<link rel="stylesheet" href="{{ asset('css/components/servicios-industria/desarrollo-comercial.css') }}">

<!-- Hoja de estilos de la sección "Desarrollo de Prototipos" -->
<link rel="stylesheet" href="{{ asset('css/components/servicios-industria/desarrollo-de-prototipos.css') }}">

<!-- Hoja de estilos las cards usadas en esta ventana -->
<link rel="stylesheet" href="{{ asset('css/components/information-card.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/servicios-industria/servicios-industria-card.css') }}">

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
            <div class="carousel-item active">
                <img class="d-block w-10 img1" src="{{ asset('photos/slide3.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-10 img1" src="{{ asset('photos/slide4.png') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
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

        <!-- Separador primer tipo -->
        <div class="separador1ServiciosIndustria"></div>

        <!-- Sección "Estudios de Usabilidad" -->
        <x-servicios-industria.estudios-de-usabilidad />
        
        <!-- Sección "Técnicas para llevar a cabo los estudios de usabilidad" -->
        <x-servicios-industria.tecnicas-de-estudio-de-usabilidad />
        
        <!-- Separador segundo tipo -->
        <div class="separador2ServiciosIndustria"></div>
        
        <!-- Sección "Consultoría en UX/UI" -->
        <x-servicios-industria.consultoria-en-u-x-u-i />

        <!-- Separador segundo tipo -->
        <div class="separador2ServiciosIndustria"></div>

        <!-- Sección "Capacitación y Formación" -->
        <x-servicios-industria.capacitacion-y-formacion />

        <!-- Sección "Desarrollo Comercial" -->
        <x-servicios-industria.desarrollo-comercial />

        <!-- Sección "Desarrollo de Prototipos" -->
        <x-servicios-industria.desarrollo-de-prototipos />

        <!-- Sección "Hablanos" -->
        <x-hablanos />

    </div>
@endsection