<?php

namespace App\View\Components\Eventos;

use Illuminate\View\Component;

class lightBox_carousel extends Component
{
    public $titulo;
    public $texto;
    public $imagen;
    public $diapositiva;
    public $lugar;
    public $statusCarouselItem;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->imagen = $imagen;
        $this->diapositiva = $diapositiva;
        $this->lugar = $lugar;
        $this->statusCarouselItem = $statusCarouselItem;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.eventos.light-box_carousel');
    }
}
