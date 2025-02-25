<?php
if (!function_exists('renderSVG')) {
    function renderSVG($color)
    {
        return '
        <div class="ContenedorSVG">     
            <svg xmlns="http://www.w3.org/2000/svg" width="353" height="230" viewBox="0 0 353 230" fill="none">
                <g filter="url(#filter0_d_539_176)">
                    <path d="M348.814 76.6173C348.814 185.415 139.289 202.257 18.7572 221.222C8.92613 222.768 0 215.209 0 205.257V16C0 7.16344 7.16342 0 16 0H332.814C341.651 0 348.814 7.15253 348.814 15.9891V76.6173Z" fill="' . $color . '" fill-opacity="0.9" shape-rendering="crispEdges"/>
                </g>
            </svg>
        </div>';
    }
}
?>


<div style="background: url('{{ $imagen }}') rgb(255, 255, 255) center / cover no-repeat;" class="contenedorCard">
    {!! renderSVG($color) !!}
    <div class="contenedorTituloCard">
        <div class="tituloCard">{{ $titulo }}</div>
    </div>
</div>