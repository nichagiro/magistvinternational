<?php

namespace App\View\Components;

use Illuminate\View\Component;

class socials extends Component
{
    public  $telegram;
    public $instagram;
    
    public function __construct($instagram = true, $telegram = true)
    {
        $this->telegram = $telegram;
        $this->instagram = $instagram;   
    }

    public function render()
    {
        return view('components.socials');
    }
}
