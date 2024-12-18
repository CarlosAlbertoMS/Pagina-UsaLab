<?php

namespace App\View\Components\Investigacion;

use Illuminate\View\Component;

class InvestigacionesMasDestacadas extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.investigacion.investigaciones-mas-destacadas');
    }
}
