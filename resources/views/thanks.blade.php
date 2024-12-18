<!-- Exportamos el layout de la pagina principal -->
@extends('layouts.main')

<!-- Agregamos el CSS de la página -->
@section('cssp')
    <link href="{{ asset('css/thanks.css') }}" type="text/css" rel="stylesheet">
@endsection

<!-- Titulo de la pestaña de la página -->
@section('title', 'Gracias ❤️')

<!-- Empieza el contenido de la página -->
@section('content')
    <div class="thanksContent">
        <!-- Imagen de fondo -->
        <img class="thanksimg" src="{{ asset('photos/thanksimg.png') }}" alt="" srcset="">
        <!-- Texto Gracias -->
        <div class="thanksp">¡Gracias por confiar en UsaLab!<br>Estamos emocionados de colaborar contigo y llevar tu proyecto al siguiente nivel</div>
    </div>
@endsection