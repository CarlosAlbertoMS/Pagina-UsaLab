<div class="contenedorTalleres" id="talleres">
<div class="contenedorSubtituloTalleres subtituloTalleres"> Talleres </div>

    <div id="carouselTalleres" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselTalleres" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselTalleres" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselTalleres" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselTalleres" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <x-eventos.light-box_carousel diapositiva="slide-1" lugar="First slide" statusCarouselItem="active" imagen="{{ asset('img/image5.png') }}" titulo="Diseño centrado en el Usuario: Principios y practicas" texto="El DCU se basa en la iteración y en el estudio de las necesidades de los usuarios para que puedan tener una experiencia de uso satisfactoria y memorable. Para ello, se analizan las características de los usuarios, como las personas que los usarán, el propósito de su uso y las condiciones en las que lo harán. " />
            <x-eventos.light-box_carousel diapositiva="slide-2" lugar="Second slide" statusCarouselItem="" imagen="{{ asset('img/image6.png') }}" titulo="Mejores prácticas para diseñar interfaces móviles accesibles" texto="Los diseñadores y las empresas debemos descubrir las complejidades del diseño UX/UI móvil profundizando en una lista seleccionada de lo que se debe y no se debe hacer. Desde priorizar enfoques centrados en el usuario hasta evitar errores comunes, la lista busca ayudarte como diseñador o desarrollador." />
            <x-eventos.light-box_carousel diapositiva="slide-3" lugar="Third slide" statusCarouselItem="" imagen="{{ asset('img/image7.png') }}" titulo="Implementación de prácticas de diseño inclusivo" texto="Al implementar prácticas de diseño inclusivas, las empresas no sólo pueden cumplir con los requisitos legales y mejorar la experiencia del usuario, sino también acceder a nuevos mercados, mejorar su imagen de marca y fomentar la innovación." />
            <x-eventos.light-box_carousel diapositiva="slide-4" lugar="Fourth slide" statusCarouselItem="" imagen="{{ asset('img/image8.png') }}" titulo="Pruebas de usabilidad para entornos virtuales" texto="Las pruebas de usabilidad son una técnica de evaluación en la que los usuarios interactúan con un producto, sistema o sitio web y se observa su comportamiento. Se utilizan para identificar problemas de usabilidad y mejorar la experiencia del usuario." />
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTalleres" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTalleres" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="contenedorTalleristas">
        <div class="contenedorSubtituloTalleristas">
            <div class="subtituloTalleristas">Talleristas</div>
        </div>
        <div class="contenedorCards">

            <x-eventos.cards-eventos color="rgb(167, 199, 65)" imagen="{{ asset('photos/Dr. Carlos.png') }}"
                titulo="Dr. Carlos Alberto Fernandez" />

            <x-eventos.cards-eventos color="rgb(167, 199, 65)" imagen="{{ asset('photos/Dr. Eduardo.png') }}"
                titulo="Dr. Eduardo Sanchez" />

            <x-eventos.cards-eventos color="rgb(167, 199, 65)" imagen="{{ asset('photos/M.C. Everth.png') }}"
                titulo="M.C. Everth Haidee Rocha" />

            <x-eventos.cards-eventos color="rgb(167, 199, 65)" imagen="{{ asset('photos/M.E.C. Celia.png') }}"
                titulo="M.E.C. Celia Bertha Reyes" />


        </div>
    </div>
    <div class="separadorTalleres"></div> 

</div>

