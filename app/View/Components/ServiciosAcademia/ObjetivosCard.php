<?php

namespace App\View\Components\ServiciosAcademia;

use Illuminate\View\Component;

class ObjetivosCard extends Component
{
    public $backgroundImage;
    public $title;

    public function __construct($backgroundImage, $title = 'Título por defecto')
    {
        $this->backgroundImage = $backgroundImage;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.servicios-academia.objetivos-card');
    }
}
