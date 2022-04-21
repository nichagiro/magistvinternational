<?php

namespace App\View\Components\layout;

use Illuminate\View\Component;

class index extends Component
{
    public $title, $keywords, $description, $subject, $autor, $copyright, $robots, $imgAlt, $type, $img, $url;
    public $bodyClass;

    public function __construct($seo, $bodyClass = '')
    {
        $this->title = $seo->title;
        $this->keywords = $seo->keywords;
        $this->description = $seo->description;
        $this->subject = $seo->subject;
        $this->autor = $seo->autor;
        $this->copyright = $seo->copyright;
        $this->robots = $seo->robots;
        $this->imgAlt = $seo->imgAlt;
        $this->type = $seo->type;
        $this->img = $seo->img;
        $this->url = $seo->url;

        $this->bodyClass = $bodyClass;
    }


    public function render()
    {        
        return view('components.layout.index');
    }
}
