@extends('layouts.main')

@section('cssp')

@endsection

@section('title','Investigaciones')

@section('content')
    <!-- Contenedor para la ventana Investigación -->
    <div class="eventos-window-container">
        <!-- Contenedor para la sección "Investigación" (Titulo y descripción) -->
        <div class="eventos-container">
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
    
            <!-- Titulo "Eventos -->
            @section('tituloc')
            <br><br>Eventos
            @endsection
    
            <!-- Descripción de la página Eventos -->
            @section('contc','La investigación en UsaLab impulsa el avance en usabilidad e interacción humano-computadora (HCI). Nos enfocamos en contribuir al ámbito académico y ofrecer soluciones innovadoras para desafíos en el diseño de sistemas y productos interactivos, explorando nuevas metodologías y evaluando tecnologías emergentes.')
        </div>

        <!-- Sección "Proyectos actuales" -->
        <x-eventos.proximos-eventos/>

    </div>
@endsection