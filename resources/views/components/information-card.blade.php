<div class="informationCardContainer">
    <!-- Imagen de la sección -->
    <img src="{{ $image }}" alt="Imagen de la tarjeta" class="imagenInformationCard">
    <!-- Contenedor del texto de la sección -->
    <div class="textoInformationCardContainer">
        <!-- Texto de la sección -->
        <div class="textoInformationCard">
            {{ $slot }}
        </div>
    </div>
</div>
