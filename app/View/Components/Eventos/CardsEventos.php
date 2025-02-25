<?php

namespace App\View\Components\Eventos;

use Illuminate\View\Component;

class CardsEventos extends Component
{
    public $color;
    public $titulo;
    public $imagen;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color, $titulo, $imagen)
    {
        $this->color = $color;
        $this->titulo = $titulo;
        $this->imagen = $imagen;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.eventos.cards-eventos');
    }
}
