<!-- Exportamos el layout de la pagina principal -->
@extends('layouts.main')

<!-- Agregamos el CSS de la página -->
@section('cssp')
<link href="{{ asset('css/home.css') }}" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/components/home/principal-tarjetas.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/home/ultimos-eventos.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/home/bienvenidos-usalab.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/home/desarrollo-comercial.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/home/clientes.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/home/equipo-cargo.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/hablanos.css') }}">
@endsection

<!-- Titulo de la pestaña de la página -->
@section('title','Pagina de inicio')

<!-- Empieza el contenido de la página -->
@section('content')

@section('img')
<div class="carousel-item active">
    <img class="d-block w-100 img1" src="{{ asset('photos/slide1.png') }}" alt="...">
</div>
<div class="carousel-item">
    <img class="d-block w-100 img1" src="{{ asset('photos/slide3.png') }}" alt="...">
</div>
<div class="carousel-item">
    <img class="d-block w-100 img1" src="{{ asset('photos/slide4.png') }}" alt="...">
</div>
<div class="carousel-item">
    <img class="d-block w-100 img1" src="{{ asset('photos/slide8.png') }}" alt="...">
</div>
@endsection

@section('tituloc')
UsaLab<br>Laboratorio de Usabilidad
@endsection

@section('contc','Es un laboratorio de la Universidad Tecnológica de la Mixteca (UTM)
                      especializado en usabilidad e interacción humano-computadora (HCI). Se dedica a investigar,
                      diseñar y
                      optimizar interfaces y sistemas interactivos, asegurando que sean accesibles e intuitivos.')

<div class="separador2"></div>

<!-- Seccion principal de tarjetas (Nuestros servicios, Nosotros, Investigacion) -->
 <div class="tarjetas-home">
    <x-home.tarjetas-principal />
    <!-- Termina seccion principal de tarjetas -->
    <!-- Campo del fondo de las tarjetas de la pagina -->
<div class="fondo-azul">
</div>
    <!-- Seccion ultimos eventos -->
    <x-home.ultimos-eventos />
<!-- Termina seccion ultimos eventos -->

 </div>


<!-- Seccion Bienvenidos usalab -->
<x-home.bienvenidos-usalab />

<x-home.desarrollo-comercial />

<div class="separador2"></div>

<!-- Titulo clientes -->
<x-home.clientes />
<!-- Termina seccion clientes -->

<div class="separador2"></div>

<!-- Seccion equipo a cargo -->
<x-home.equipo-cargo />
<!-- Termina seccion equipo a cargo -->

<div class="separador2"></div>

<!-- Seccion hablanos -->
<x-hablanos />
<!-- Termina seccion hablanos -->
 
<div class="separador6"></div>

<script>
  declare var $;
  $('.carousel').carousel()
</script>

@endsection