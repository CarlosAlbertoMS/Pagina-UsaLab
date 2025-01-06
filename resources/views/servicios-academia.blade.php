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
            <br><br>Servicios: Academia
            @endsection
    
            <!-- Descripción de la página Investigación -->
            @section('contc','UsaLab, el Laboratorio de Usabilidad de la Universidad Tecnológica de la Mixteca (UTM), juega un papel crucial en la formación y desarrollo de estudiantes y profesionales en el campo de la usabilidad y la interacción humano-computadora (HCI). Integramos la teoría y la práctica a través de iniciativas académicas, colaboraciones y eventos.')
        </div>



        <!-- Sección "Hablanos" -->
        <x-hablanos />

    </div>
@endsection