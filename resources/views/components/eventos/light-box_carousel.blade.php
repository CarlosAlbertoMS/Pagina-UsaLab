<div class="carousel-item {{ $statusCarouselItem }}" data-id="{{ $diapositiva }}">
    <img src="{{ $imagen }}" class="d-block w-100 slide-image" alt="{{ $lugar }}">
    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center" style="height: 100%; top: 0; bottom: 0; left: 0; right: 0;">
        <div class="contenedorImageText">
            <h5 class="tipografiaImageText slide-title">{{ $titulo }}</h5>
        </div>
        <p class="extra-text d-none">
            {{ $texto }}
            <button class="btn-mas-info">Más información</button>
        </p>
    </div>
</div>