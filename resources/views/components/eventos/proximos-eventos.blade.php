<div class="ContenedorProximosEventos">

  <div class="ProximosEventosContenedorTitulo">
    <div class="ProximosEventosTitulo">Próximos eventos</div>
  </div>

  <div class="ContenedorConferencias"> 
    <div class="ContenedorSubtituloConferencias SubtituloConferencias"> Conferencias </div>

    <div id="carouselProximosEventos" class="carousel slide carousel-fade">

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselProximosEventos" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselProximosEventos" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselProximosEventos" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselProximosEventos" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      
      <div class="carousel-inner">
        <x-eventos.light-box_carousel diapositiva="slide-1" 
                                      lugar="First slide" 
                                      statusCarouselItem="active" 
                                      imagen="{{ asset('img/image1.png') }}" 
                                      titulo="Avances recientes en HCI y su impacto en la tecnología moderna" 
                                      texto="La interacción humano-computadora (HCI) es un campo de estudio multidisciplinario que estudia el diseño de tecnología informática y la interacción entre ordenadores y personas, cubriendo así todas las formas de diseño de tecnología de la información." />
        
        <x-eventos.light-box_carousel diapositiva="slide-2"
                                      lugar="Second slide"
                                      statusCarouselItem=""
                                      imagen="{{ asset('img/image2.png') }}"
                                      titulo="Tendencias emergentes en la interacción humano-computadora"
                                      texto="Estas nuevas tecnologías de realidad virtual cambiarán la forma en la que se diseñan las interfaces de usuario e, incluso, la forma en la que se interactúe con los sistemas al igual que lo hicieron en su momento los teléfonos inteligentes" />

        <x-eventos.light-box_carousel diapositiva="slide-3"
                                      lugar="Third slide"
                                      statusCarouselItem=""
                                      imagen="{{ asset('img/image3.png') }}"
                                      titulo="Desafíos y soluciones en la usabilidad de aplicaciones móviles"
                                      texto="Existen una variedad de desafíos en todo el ciclo de vida del desarrollo de aplicaciones móviles. Estos van desde elegir el mejor enfoque para desarrollar la aplicación, hasta crear una aplicación que sea lo suficientemente buena para destacarse de la competencia." />
                                      
        <x-eventos.light-box_carousel diapositiva="slide-4"
                                      lugar="Fourth slide"
                                      statusCarouselItem=""
                                      imagen="{{ asset('img/image4.png') }}"
                                      titulo="Como mejorar la retención de usuarios en aplicaciones móviles"
                                      texto="Saber cómo retener usuarios en una app es igual o más importante que saber atraerlos. Para ello es necesario crear las estrategias adecuadas que permitan desarrollar nuevas formas de conectar con los usuarios y crear así relaciones a largo plazo." />                              
      </div>
      
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselProximosEventos" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselProximosEventos" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="contenedorConferencistas">

  </div>  

</div>

