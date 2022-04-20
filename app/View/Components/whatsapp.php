<?php

namespace App\View\Components;

use Illuminate\View\Component;

class whatsapp extends Component
{
   
    public $number;

    public function __construct($number = 3226424588)
    {
        $this->number = $number;
    }

    public function render()
    {
        return view('components.whatsapp');
    }
}
