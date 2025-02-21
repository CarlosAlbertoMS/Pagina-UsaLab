<?php
function renderSVG() {
    return '
    <div class="ContenedorSVG">
        <svg xmlns="http://www.w3.org/2000/svg" width="353" height="230" viewBox="0 0 353 230" fill="none">
            <g filter="url(#filter0_d_539_176)">
                <path d="M348.814 76.6173C348.814 185.415 139.289 202.257 18.7572 221.222C8.92613 222.768 0 215.209 0 205.257V16C0 7.16344 7.16342 0 16 0H332.814C341.651 0 348.814 7.15253 348.814 15.9891V76.6173Z" fill="#121238" fill-opacity="0.9" shape-rendering="crispEdges"/>
            </g>
        </svg>
    </div>';
}
?>

<div class="contenedorCursos">
    <div class="contenedorTitulo">
        <div class="titulo">Cursos</div>
    </div>
    <div class="contenedorCarrusel"> </div>
    <div class="contenedorProfesores">
<div class="contenedorTitulo">
        <div class="titulo">Profesores</div>
    </div>
    <div class="contenedorCards">

        <div id="card-1" class="contenedorCard">
        <?= renderSVG(); ?> 
            <div id="titulo-1" class="contenedorTituloCard">
                <div class="tituloCard">Dr. Manuel Hernandez</div>
            </div>
        </div>

        <div id="card-2" class="contenedorCard">
        <?= renderSVG(); ?> 
        <div id="titulo-2" class="contenedorTituloCard">
                <div class="tituloCard">M.C. Gerardo Cruz</div>
            </div>
        </div>

        <div id="card-3" class="contenedorCard">
        <?= renderSVG(); ?> 
        <div id="titulo-3" class="contenedorTituloCard">
                <div class="tituloCard">M.C. Juan Juárez Fuentes</div>
            </div>
        </div>

        <div id="card-4" class="contenedorCard">
        <?= renderSVG(); ?> 
        <div  id="titulo-4" class="contenedorTituloCard">
                <div class="tituloCard">M.C. Gabriel Gerónimo Castillo</div>
            </div>
        </div>

    </div>
</div>
<div class="separador"></div>
</div>

