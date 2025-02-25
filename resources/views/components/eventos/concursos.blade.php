<div class="contenedorConcursos" id="concursos">

    <div class="contenedorSubtituloConcursos subtituloConcursos"> Concursos </div>

    <!-- Primer carrusel -->
    <div id="carouselConcursos1" class="carousel slide carousel-fade contenedorslider1">
        <div class="carousel-inner">
            <x-eventos.light-box_carousel 
                diapositiva="slide-1" 
                lugar="First slide" 
                statusCarouselItem="active" 
                imagen="{{ asset('img/image13.png') }}" 
                titulo="MexICH 2024" 
                texto="El objetivo principal de MexIHC es facilitar el intercambio de resultados científicos, su aplicación en la industria y su aplicación en la evaluación, diseño de interfaces, industria, educación, videojuegos, móviles, aplicaciones interactivas y áreas afines. En esta ocasión, MexIHC 2024 está siendo organizada por docentes e investigadores en la comunidad de HCI en México." />
        </div>
    </div>

    <!-- Segundo carrusel -->
    <div id="carouselConcursos2" class="carousel slide carousel-fade contenedorslider2">
        <div class="carousel-inner">
            <x-eventos.light-box_carousel 
                diapositiva="slide-2" 
                lugar="Second slide" 
                statusCarouselItem="active" 
                imagen="{{ asset('img/image14.png') }}" 
                titulo="CHI 2025" 
                texto="La conferencia CHI de la ACM (Asociación de Maquinaria Computacional) sobre Factores Humanos en Sistemas Computacionales es la principal conferencia internacional sobre interacción hombre-computadora. CHI se llevará a cabo en Yokohama, Japón, en PACIFICO Yokohama del 26 de abril al 1 de mayo de 2025, y también admitirá asistencia remota." />
        </div>
    </div>
</div>
