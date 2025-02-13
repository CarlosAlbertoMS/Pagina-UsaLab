@extends('layouts.main')

@section('cssp')
<!-- Hoja de estilos de la ventana "Servicios: Academia" -->
<link rel="stylesheet" href="{{ asset('css/servicios-academia.css') }}">

<!-- Hoja de estilos de la sección "Incorporación de HCI en planes de estudio" -->
<link rel="stylesheet" href="{{ asset('css/components/servicios-academia/incorporacion-de-hci-en-planes-de-estudio.css') }}">

<!-- Hoja de estilos de la sección "Objetivos de la Incorporación de HCI" -->
<link rel="stylesheet" href="{{ asset('css/components/servicios-academia/objetivos-de-la-incorporacion-de-hci.css') }}">

<!-- Hoja de estilos de la sección "Desarrollo de Cursos Especializados" -->
<link rel="stylesheet" href="{{ asset('css/components/servicios-academia/desarrollo-de-cursos-especializados.css') }}">

<!-- Hoja de estilos las cards de objetivos de incorporación -->
<link rel="stylesheet" href="{{ asset('css/components/servicios-academia/objetivos-card.css') }}">

<!-- Hoja de estilos de la sección "Asesorias Especializadas" -->
<link rel="stylesheet" href="{{ asset('css/components/servicios-academia/asesorias-especializadas.css') }}">

<!-- Hoja de estilos de la sección "Acceso a Laboratorio" -->
<link rel="stylesheet" href="{{ asset('css/components/servicios-academia/acceso-a-laboratorio.css') }}">

<!-- Hoja de estilos las cards usadas en esta ventana -->
<link rel="stylesheet" href="{{ asset('css/components/information-card.css') }}">

<!-- Hoja de estilos de la sección "Hablanos" -->
<link rel="stylesheet" href="{{ asset('css/components/hablanos.css') }}">
@endsection

@section('title','Servicios: Academia')

@section('content')
    <!-- Contenedor para la ventana Servicios: Academia -->
    <div class="servicios-academia-window-container">
        <!-- Contenedor para la sección "Servicios: Academia" (Titulo y descripción) -->
        <div class="servicios-academia-container">
            <!-- Carrousel -->
            @section('img')
            <div class="carousel-item active">
                <img class="d-block w-10 img1" src="{{ asset('photos/slide9.png') }}" alt="First slide">
            </div>
            @endsection
    
            <!-- Titulo "Servicios: Academia" -->
            @section('tituloc')
            <br><br>Servicios: Academia
            @endsection
    
            <!-- Descripción de la página Servicios: Academia -->
            @section('contc','UsaLab, el Laboratorio de Usabilidad de la Universidad Tecnológica de la Mixteca (UTM), juega un papel crucial en la formación y desarrollo de estudiantes y profesionales en el campo de la usabilidad y la interacción humano-computadora (HCI). Integramos la teoría y la práctica a través de iniciativas académicas, colaboraciones y eventos.')
        </div>

        <!-- Sección "Incorporación de HCI en planes de estudio" -->        
        <x-servicios-academia.incorporacion-de-hci-en-planes-de-estudio />

        <!-- Subsección "Objetivos de la Incorporacion de HCI" -->        
        <x-servicios-academia.objetivos-de-la-incorporacion-de-hci />

        <!-- Sección "Desarrollo de Cursos Especializados" -->        
        <x-servicios-academia.desarrollo-de-cursos-especializados />

        <!-- Sección "Asesorias Especializadas" -->        
        <x-servicios-academia.asesorias-especializadas />

        <!-- Sección "Acceso a Laboratorio" -->        
        <x-servicios-academia.acceso-a-laboratorio />

        <!-- Separador entre el contenido de la sección y el háblanos -->
        <div class="separador-servicios-academia"></div>

        <!-- Sección "Hablanos" -->
        <x-hablanos />

    </div>
@endsection