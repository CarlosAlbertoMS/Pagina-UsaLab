<?php

namespace App\View\Components\home;

use Illuminate\View\Component;

class bienvenidos-usalab extends Component
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
        return view('components.home.bienvenidos-usalab');
    }
}
