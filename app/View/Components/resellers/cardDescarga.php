<?php

namespace App\View\Components\resellers;

use Illuminate\View\Component;

class cardDescarga extends Component
{
    public $target;
    
    public function __construct($target)
    {
        $this->target = $target;
    }


    public function render()
    {
        return view('components.resellers.card-descarga');
    }
}
