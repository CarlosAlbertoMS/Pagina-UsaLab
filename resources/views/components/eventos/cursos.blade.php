<div class="contenedorCursos" id="cursos">
    <div class="contenedorSubtituloCursos subtitulo">Cursos</div>

    <div id="carouselCursos" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselCursos" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselCursos" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselCursos" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselCursos" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <x-eventos.light-box_carousel diapositiva="slide-1" lugar="First slide" statusCarouselItem="active" imagen="{{ asset('img/image9.png') }}" titulo="Introducción a la experiencia de usuario (UX) y su aplicación practica" texto="La experiencia de navegación se refiere a los aspectos involucrados en el desplazamiento de un visitante dentro de un sitio web. Estos pueden ser su navegación y movimiento a través de las páginas, así como la lógica que las conecta.  " />
            <x-eventos.light-box_carousel diapositiva="slide-2" lugar="Second slide" statusCarouselItem="" imagen="{{ asset('img/image10.png') }}" titulo="Evaluación de la usabilidad en dispositivos móviles" texto="La evaluación de la usabilidad en dispositivos móviles es un proceso que permite identificar problemas de uso de una aplicación y realizar mejoras para que sea más fácil y agradable de usar." />
            <x-eventos.light-box_carousel diapositiva="slide-3" lugar="Third slide" statusCarouselItem="" imagen="{{ asset('img/image11.png') }}" titulo="Diseño para la accesibilidad: Herramienta y técnica" texto="La evaluación de la accesibilidad suele verse limitada a la comprobación de la conformidad con los estándares de accesibilidad. La conformidad con estos estándares es importante: en algunos casos es un requisito legal y en otros es sólo una buena forma de comprobar que se han tenido en cuenta, adecuadamente, todos los problemas de accesibilidad." />
            <x-eventos.light-box_carousel diapositiva="slide-4" lugar="Fourth slide" statusCarouselItem="" imagen="{{ asset('img/image12.png') }}" titulo="Principios de diseño para realidad aumentada y virtual" texto="La tendencia de la tecnología en los últimos años apunta a una transferencia de interfaces en dispositivos con pantallas, a la integración de la información en entornos inmersivos 3D tanto digitales como reales." />
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCursos" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselCursos" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="contenedorProfesores">
        <div class="contenedorSubtituloProfesores">
            <div class="subtitulo">Profesores</div>
        </div>
        <div class="contenedorCards">

            <x-eventos.cards-eventos color="rgb(18, 18, 56)" imagen="{{ asset('photos/drManuelHernandez.png') }}"
                titulo="Dr. Manuel Hernandez" />

            <x-eventos.cards-eventos color="rgb(18, 18, 56)" imagen="{{ asset('photos/mcGenerardo.png') }}"
                titulo="Dr. Manuel Hernandez" />

            <x-eventos.cards-eventos color="rgb(18, 18, 56)" imagen="{{ asset('photos/mcJuanJuarez.png') }}"
                titulo="Dr. Manuel Hernandez" />

            <x-eventos.cards-eventos color="rgb(18, 18, 56)" imagen="{{ asset('photos/mcGabrielGeronimo.png') }}"
                titulo="Dr. Manuel Hernandez" />


        </div>
    </div>
    <div class="separadorCursos"></div>

</div>