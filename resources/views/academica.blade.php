<!-- Exportamos el layout de la pagina principal -->
@extends('layouts.main')

<!-- Agregamos el CSS de la página -->
@section('cssp')
    <link href="{{ asset('css/academica.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/components/academica/pruebas-usabilidad.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/academica/practicas-profesionales.css') }}" rel="stylesheet">
@endsection

<!-- Titulo de la pestaña de la página -->
@section('title', 'Formacion Academica')

<!-- Empieza el contenido de la página -->
@section('content')


    <!-- Carrusel de la página principal -->

    @section('img')
<div class="carousel-item active">
    <img class="d-block w-10 img1" src="{{ asset('photos/slide5.png') }}" alt="First slide">
</div>

@endsection

@section('tituloc')
Formacion Académica
@endsection

@section('contc','En UsaLab, los estudiantes pueden participar en proyectos reales, realizar prácticas profesionales, colaborar en investigaciones y asistir a talleres. Estas actividades te permitirán aplicar tus conocimientos y desarrollar habilidades clave en el campo de la usabilidad.')

    <!-- Termina carrusel de la pagina principal -->
    <div class="separador2"></div>
    <!-- Seccion pruebas de Usabilidad -->
    <x-academica.pruebas-usabilidad />

    <!-- Carrusel Practicas profesionales -->
     <div class="practicaprofesional" id="practicas"></div>
     <x-academica.practicas-profesionales />
    
    <div class="separador2"></div>
    <div class="lineadiv">
        <div class="linea3"></div>
    </div>
    <div class="separador2"></div>

    <!-- Carrusel Servicio Social -->
    <x-academica.servicio-social />
    

@endsection