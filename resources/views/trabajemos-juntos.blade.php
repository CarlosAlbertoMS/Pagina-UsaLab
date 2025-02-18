@extends('layouts.main')

@section('cssp')
<link href="{{ asset('css/trabajemos-juntos.css') }}" type="text/css" rel="stylesheet">

<!-- Hoja de estilos de la sección "Formulario Contáctanos" -->
<link rel="stylesheet" href="{{ asset('css/components/trabajemos-juntos/formulario-contactanos.css') }}">

@endsection

@section('title','Trabajemos juntos')

@section('content')
    <!-- Contenedor para la ventana Trabajemos Juntos -->
    <div class="trabajemos-juntos-window-container">
        <!-- Contenedor para la sección "Investigación" (Titulo y descripción) -->
        <div class="trabajemos-juntos-container">
            <!-- Carrousel -->
            @section('img')
            <div class="carousel-item active">
                <img class="d-block w-10 img1" src="{{ asset('photos/trabajemos-juntos.png') }}" alt="First slide">
            @endsection
    
            <!-- Titulo "Trabajemos Juntos" -->
            @section('tituloc')
            <br><br>Trabajemos Juntos
            @endsection
    
            <!-- Descripción de la página "Trabajemos Juntos" -->
            @section('contc','En UsaLab, te ayudamos a hacer realidad tus ideas. Cada proyecto es único, por eso diseñamos soluciones personalizadas. Comparte tu proyecto con nosotros y juntos crearemos un plan de investigación y desarrollo adaptado a tus necesidades. colaborar en la optimización de interfaces, desarrollo tecnológico o asesoría.')
        </div>

        <!-- Sección del formulario -->
        <x-trabajemos-juntos.formulario-contactanos />

        <!-- Frase -->
        <div class="frase">"Transformando ideas en experiencias intuitivas, uniendo tecnología y usabilidad para un futuro más accesible."<br><br>UsaLab</div>

    </div>
@endsection