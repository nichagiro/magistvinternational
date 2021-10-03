<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title;
    public $id;
    public $length=NULL;
    public $ok;
    public $ok_name;

    public function __construct($title, $id, $ok=true, $ok_name="Guardar", $length="")
    {
        $this->title = $title;
        $this->id = $id;
        $this->ok = $ok;
        $this->ok_name = $ok_name;
        
        if($length != ""){
            $this->length = "modal-".$length;
        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
