<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    public $seo = [
        "title" => 'MAGIS TV INTERNATIONAL | SERIES | PELÍCULAS | DEPORTES',
        "keywords" => 'magis tv international, series, películas, deportes, premium, netflix, prime, magi',
        "description" => 'magis tv international, disfruta del mejor contenido en full calidad, películas, series, deportes, canales en vivo y premium, netflix, prime, disney plus, entre otros.',
        "subject"    => 'Entretenimiento, peliculas, series, anime, caricaturas',
        "autor" => 'Nicolas Chamorro Giron',
        "copyright" => '© overweb',
        "robots" => 'index, follow',
        "imgAlt" => 'MAGIS TV ENTRETENIMIENTO',
        "type" => 'article'
    ];

    public function __construct()
    {
        $this->seo = (object) $this->seo;
        $this->seo->url = env('APP_URL') . Route::currentRouteName(); // nombre url dinamica
        $this->seo->img = asset('img/game.webp'); // imagen representativa open graph
    }

    public function index()
    {
        $seo = $this->seo;
        $bodyClass = 'dg-theme';
        return view('welcome', compact('seo', 'bodyClass'));
    }

}
