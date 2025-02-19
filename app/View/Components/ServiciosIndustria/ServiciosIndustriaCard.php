<?php

namespace App\View\Components\ServiciosIndustria;

use Illuminate\View\Component;

class ServiciosIndustriaCard extends Component
{
    public $title;
    public $text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.servicios-industria.servicios-industria-card');
    }
}
