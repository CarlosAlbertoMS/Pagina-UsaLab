@extends('layouts.main')

@section('cssp')
<!-- Hoja de estilos de la ventana "Servicios: Academia" -->
<link rel="stylesheet" href="{{ asset('css/servicios-academia.css') }}">

<!-- Hoja de estilos de la sección "Incorporación de HCI en planes de estudio" -->
<link rel="stylesheet" href="{{ asset('css/components/servicios-academia/incorporacion-de-hci-en-planes-de-estudio.css') }}">

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

        <div style="display:flex; align-content:center; justify-content:center; flex-wrap:wrap;background-image:url('{{ asset('img/UC.jpeg') }}'); width:1000px; height: 500px; margin: 80px 0px 80px 0px">
            <div style="font-family:Montserrat; color:#FFF; font-size:40px; background-color:rgba(128,128,128,0.5);font-weight: 700;">Secciones en construcción: Planes de estudio, Cursos especializados, Asesorías y Acceso al laboratorio      :(</div>
        </div>

        <!-- Sección "Hablanos" -->
        <x-hablanos />

    </div>
@endsection