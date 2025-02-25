@extends('layouts.main')

@section('cssp')
    <!-- Hoja de estilos para el titulo de la sección "Proximos eventos" -->
    <link href="{{ asset('css/components/eventos/proximosEventos.css') }}" type="text/css" rel="stylesheet">
    <!-- Hoja de estilos para la sección "ultimos-eventos" -->
    <link href="{{ asset('css/components/eventos/ultimos-eventos.css') }}" type="text/css" rel="stylesheet">
    <!-- Hoja de estilos para la sección "cursos   " -->
    <link href="{{ asset('css/components/eventos/cursos.css') }}" type="text/css" rel="stylesheet">
    <!-- Hoja de estilos para el light box carousel" -->
    <link href="{{ asset('css/components/eventos/lightBox_carousel.css') }}" type="text/css" rel="stylesheet">
    <!-- Hoja de estilos para el Componente "CardsEventos" -->
    <link href="{{ asset('css/components/eventos/cardsEventos.css') }}" type="text/css" rel="stylesheet">
     <!-- Hoja de estilos para el Componete "Talleres" -->
     <link href="{{ asset('css/components/eventos/talleres.css') }}" type="text/css" rel="stylesheet">
    <!-- Hoja de estilos para la subsecciòn "Concursos" -->
    <link href="{{ asset('css/components/eventos/concursos.css') }}" type="text/css" rel="stylesheet">

@endsection

@section('title', 'Investigaciones')
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

        <!-- Sección "Ultimos Eventos" -->
        <x-eventos.ultimos-eventos />        

        <!-- Sección "Proximos eventos y conferencias" -->
        <x-eventos.proximos-eventos/>

        <!-- Subsección "Talleres" -->
        <x-eventos.talleres/>

        <!-- Subsección "Cursos" -->
        <x-eventos.cursos /> 

        <!-- Subsección "Concursos" -->
        <x-eventos.concursos/>

        <script>
document.addEventListener('DOMContentLoaded', function () {
    // Lista de IDs de los carruseles que necesitan el comportamiento personalizado
    const targetCarousels = ['carouselProximosEventos', 'carouselTalleres', 'carouselConcursos1', 'carouselConcursos2'];

    targetCarousels.forEach(id => {
        const myCarouselElement = document.getElementById(id);
        if (myCarouselElement) {
            const carousel = new bootstrap.Carousel(myCarouselElement, {
                interval: false, // Cambia las diapositivas solo con los botones
                touch: false // Opcional: desactiva el deslizamiento táctil
            });

            // Botones de navegación prev/next dentro del carrusel actual
            const prevButton = myCarouselElement.querySelector('.carousel-control-prev');
            const nextButton = myCarouselElement.querySelector('.carousel-control-next');

            if (prevButton) {
                prevButton.addEventListener('click', function () {
                    carousel.prev();
                });
            }

            if (nextButton) {
                nextButton.addEventListener('click', function () {
                    carousel.next();
                });
            }

            // Seleccionar todos los slides dentro del carrusel específico
            const slides = myCarouselElement.querySelectorAll('.carousel-item');

            // Evento para hacer clic en cada slide
            slides.forEach(slide => {
                slide.addEventListener('click', () => {
                    // Obtener elementos del slide actual
                    const image = slide.querySelector('.slide-image');
                    const title = slide.querySelector('.slide-title');
                    const extraText = slide.querySelector('.extra-text');

                    // Verificar si ya está activo o no
                    if (image.classList.contains('dimmed')) {
                        // Restaurar el estado original
                        image.classList.remove('dimmed');
                        title.classList.remove('shrink');
                        extraText.classList.remove('show');
                        extraText.classList.add('d-none');
                    } else {
                        // Aplicar cambios al hacer clic
                        image.classList.add('dimmed');
                        title.classList.add('shrink');
                        extraText.classList.add('show', 'move-right');
                        extraText.classList.remove('d-none');
                    }
                });
            });

            // Mantener el estado actual al cambiar de slide
            myCarouselElement.addEventListener('slid.bs.carousel', () => {
                slides.forEach(slide => {
                    const image = slide.querySelector('.slide-image');
                    const title = slide.querySelector('.slide-title');
                    const extraText = slide.querySelector('.extra-text');
                });
            });
        }
    });
});
</script>


@endsection