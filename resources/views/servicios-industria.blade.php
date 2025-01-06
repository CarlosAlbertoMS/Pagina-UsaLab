@extends('layouts.main')

@section('cssp')
<link href="{{ asset('css/investigacion.css') }}" type="text/css" rel="stylesheet">

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
    
            <!-- Titulo "Investigeación -->
            @section('tituloc')
            <br><br>Servicios: Industria
            @endsection
    
            <!-- Descripción de la página Investigación -->
            @section('contc','En UsaLab, el Laboratorio de Usabilidad de la UTM, promovemos la usabilidad y la interacción humano-computadora (HCI). Apoyamos a la academia e industria con servicios que mejoran la experiencia del usuario y el diseño de interfaces, satisfaciendo las necesidades de estudiantes, investigadores y empresas.')
        </div>

        

        <!-- Sección "Hablanos" -->
        <x-hablanos />

    </div>
@endsection