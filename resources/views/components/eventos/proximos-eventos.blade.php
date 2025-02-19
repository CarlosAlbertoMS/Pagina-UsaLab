<div class="ContenedorProximosEventos">

  <div class="ProximosEventosContenedorTitulo">
    <div class="ProximosEventosTitulo">Próximos eventos</div>
  </div>

  <div class="ContenedorConferencias"> 
    <div class="ContenedorSubtituloConferencias SubtituloConferencias"> Conferencias </div>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade">

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-id="slide-1">
          <img src="img/image1.png" class="d-block w-100 slide-image" alt="First slide">
          <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="height: 100%; top: 0; bottom: 0; left: 0; right: 0;">
            <div class="contenedorImageText">
              <h5 class="tipografiaImageText slide-title">Avances recientes en HCI y su impacto en la tecnología moderna</h5>
            </div>
            <p class="extra-text d-none">
              La interacción humano-computadora (HCI) es un campo de estudio multidisciplinario que estudia el diseño de tecnología informática y la interacción entre ordenadores y personas, cubriendo así todas las formas de diseño de tecnología de la información.
              <button class="btn-mas-info">Más información</button>
            </p>
          </div>
        </div>
        <div class="carousel-item" data-id="slide-2">
          <img src="img/image2.png" class="d-block w-100 slide-image" alt="Second slide">
          <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="height: 100%; top: 0; bottom: 0; left: 0; right: 0;">
            <div class="contenedorImageText">
              <h5 class="tipografiaImageText slide-title">Tendencias emergentes en la interacción humano-computadora</h5>
            </div>
            <p class="extra-text d-none">
              Estas nuevas tecnologías de realidad virtual cambiarán la forma en la que se diseñan las interfaces de usuario e, incluso, la forma en la que se interactúe con los sistemas al igual que lo hicieron en su momento los teléfonos inteligentes
              <button class="btn-mas-info">Más información</button>
            </p>
          </div>
        </div>
        <div class="carousel-item" data-id="slide-3">
          <img src="img/image3.png" class="d-block w-100 slide-image" alt="Third slide">
          <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="height: 100%; top: 0; bottom: 0; left: 0; right: 0;">
            <div class="contenedorImageText">
              <h5 class="tipografiaImageText slide-title">Desafíos y soluciones en la<br>usabilidad de aplicaciones móviles</h5>
            </div>
            <p class="extra-text d-none">
              Existen una variedad de desafíos en todo el ciclo de vida del desarrollo de aplicaciones móviles. Estos van desde elegir el mejor enfoque para desarrollar la aplicación, hasta crear una aplicación que sea lo suficientemente buena para destacarse de la competencia. 
              <button class="btn-mas-info">Más información</button>
            </p>
          </div>
        </div>
        <div class="carousel-item" data-id="slide-4">
          <img src="img/image4.png" class="d-block w-100 slide-image" alt="Fourth slide">
          <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="height: 100%; top: 0; bottom: 0; left: 0; right: 0;">
            <div class="contenedorImageText">
              <h5 class="tipografiaImageText slide-title">Como mejorar la retención de<br>usuarios en aplicaciones móviles</h5>
            </div>
            <p class="extra-text d-none">
              Saber cómo retener usuarios en una app es igual o más importante que saber atraerlos. Para ello es necesario crear las estrategias adecuadas que permitan desarrollar nuevas formas de conectar con los usuarios y crear así relaciones a largo plazo.
              <button class="btn-mas-info">Más información</button>
            </p>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

  </div>

  <div class="contenedorConferencistas">

  </div>  

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const myCarouselElement = document.querySelector('#carouselExampleCaptions');
  const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: false, // Cambia las diapositivas solo con los botones
    touch: false // Opcional: desactiva el deslizamiento táctil
  });

  // Opcional: Agregar funcionalidad adicional si lo necesitas
  const prevButton = document.querySelector('.carousel-control-prev');
  prevButton.addEventListener('click', function () {
    carousel.prev();
  });

  const nextButton = document.querySelector('.carousel-control-next');
  nextButton.addEventListener('click', function () {
    carousel.next();
  });

  // Seleccionar todos los slides
  const slides = document.querySelectorAll('.carousel-item');

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
});
</script>
