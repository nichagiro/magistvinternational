<?php

namespace App\View\Components;

use Illuminate\View\Component;

class whatsapp extends Component
{

    public $number;
    public $indicativo;

    public function __construct($indicativo = '58', $number = '4126679598')
    {
        $this->number = $number;
        $this->indicativo = $indicativo;
    }

    public function render()
    {
        return view('components.whatsapp');
    }
}
