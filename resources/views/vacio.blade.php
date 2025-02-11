<!-- Exportamos el layout de la pagina principal -->
@extends('layouts.main')

<!-- Agregamos el CSS de la página -->
@section('cssp')

@endsection

<!-- Titulo de la pestaña de la página -->
@section('title', 'En construcción')

<!-- Empieza el contenido de la página -->
@section('content')

    <div class="">
            <!-- Carrousel -->
            @section('img')
            <div class="carousel-item active">
                <img class="d-block w-10 img1" src="{{ asset('img/UC.jpeg') }}" alt="Una imagen que expresa que el sitio se encuentra en construcción" width="100%" height="auto">
            </div>
            @endsection
    
            <!-- Titulo "Servicios: Industria" -->
            @section('tituloc')
            <br><br>En construcción
            @endsection
    
            <!-- Descripción de la página Servicios: Industria -->
            @section('contc','¡LO SENTIMOS!Estamos trabajando lo más rápido que podemos 👷')
        </div>
@endsection