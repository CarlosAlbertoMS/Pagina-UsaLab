<?php

namespace App\View\Components;

use Illuminate\View\Component;

class informationCard extends Component
{
    public $image;

    public function __construct($image)
    {
        $this->image = $image;
    }

    public function render()
    {
        return view('components.information-card');
    }
}
