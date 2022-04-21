<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modal extends Component
{
    public $title, $id, $screen;

    public function __construct($id,  $title,  $screen)
    {
        $this->title = $title;
        $this->id = $id;
        $this->screen = $screen;
    }


    public function render()
    {
        return view('components.modal');
    }
}
