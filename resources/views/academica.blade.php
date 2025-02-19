<!-- Exportamos el layout de la pagina principal -->
@extends('layouts.main')

<!-- Agregamos el CSS de la página -->
@section('cssp')
    <link href="{{ asset('css/academica.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/components/academica/pruebas-usabilidad.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/academica/practicas-profesionales.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/academica/servicio-social.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/academica/tesis.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components/academica/maestria.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/components/hablanos.css') }}">
@endsection

<!-- Titulo de la pestaña de la página -->
@section('title', 'Formación Académica')

<!-- Empieza el contenido de la página -->
@section('content')


    <!-- Carrusel de la página principal -->

    @section('img')
<div class="carousel-item active">
    <img class="d-block w-10 img1" src="{{ asset('photos/slide5.png') }}" alt="First slide">
</div>

@endsection

@section('tituloc')
Formación Académica
@endsection

@section('contc','En UsaLab, los estudiantes pueden participar en proyectos reales, realizar prácticas profesionales, colaborar en investigaciones y asistir a talleres. Estas actividades te permitirán aplicar tus conocimientos y desarrollar habilidades clave en el campo de la usabilidad.')

    <!-- Termina carrusel de la pagina principal -->
    <div class="separador2"></div>
    <!-- Seccion pruebas de Usabilidad -->
    <x-academica.pruebas-usabilidad />
    <!--div style="display:flex; align-content:center; justify-content:center; flex-wrap:wrap;background-image:url('{{ asset('img/UC.jpeg') }}'); width:1000px; height: 500px; margin: 80px 0px 80px 0px">
            <div style="font-family:Montserrat; color:#FFF; font-size:40px; background-color:rgba(128,128,128,0.5);font-weight: 700;">Sección en desarrollo: Pruebas de usabilidad      :(</div>
        </div-->
        <div class="separador2"></div>
    <div class="lineadiv">
        <div class="linea3"></div>
    </div>
    <div class="separador2"></div>
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

    <div class="separador2"></div>
    <div class="lineadiv">
        <div class="linea3"></div>
    </div>
    <div class="separador2"></div>

    <x-academica.tesis />

    <div class="separador2"></div>
    <div class="lineadiv">
        <div class="linea3"></div>
    </div>
    <div class="separador2"></div>

    <x-academica.maestria />

    <div class="separador2"></div>
    <div class="lineadiv">
        <div class="linea3"></div>
    </div>
    <div class="separador2"></div>


    <x-hablanos />
    

@endsection