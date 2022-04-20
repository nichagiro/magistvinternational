<?php

namespace App\View\Components\layout;

use Illuminate\View\Component;

class index extends Component
{
    public $SEO;
  
    public function __construct($seo = null)
    {
        $this->SEO = $seo;       
    }


    public function render()
    {
        // return view('components.layout.index');
    }
}
