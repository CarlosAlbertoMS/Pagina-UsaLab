<div class="ContenedorTalleres">

    <!-- Primer carrusel -->
    <div id="carouselConcursos1" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <x-eventos.light-box_carousel 
                diapositiva="slide-1" 
                lugar="First slide" 
                statusCarouselItem="active" 
                imagen="{{ asset('img/image5.png') }}" 
                titulo="Taller de diseño de interfaces de usuario" 
                texto="En este taller aprenderás a diseñar interfaces de usuario de alta calidad, con una experiencia de usuario excepcional y una interfaz de usuario atractiva." />
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselConcursos1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselConcursos1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Segundo carrusel -->
    <div id="carouselConcursos2" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <x-eventos.light-box_carousel 
                diapositiva="slide-2" 
                lugar="Second slide" 
                statusCarouselItem="active" 
                imagen="{{ asset('img/image5.png') }}" 
                titulo="Taller de diseño de interfaces de usuario" 
                texto="En este taller aprenderás a diseñar interfaces de usuario de alta calidad, con una experiencia de usuario excepcional y una interfaz de usuario atractiva." />
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselConcursos2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselConcursos2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>
