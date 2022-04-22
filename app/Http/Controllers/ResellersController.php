<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ResellersController extends Controller
{
    public $seo = [
        "title" => 'MAGIS TV INTERNATIONAL | APP DE PELICULAS | APLICACION DE SERIES',
        "keywords" => 'magis tv international, series, películas, deportes, premium, netflix, prime, magi',
        "description" => 'magis tv international, trabaja con nosotros y vende paquetes a tus usuarios para disfrutar de magis tv, peliculas, series, novelas, canales, deportes, etc',
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
        $this->seo->img = asset('img/slider_caricatura.webp'); // imagen representativa open graph
    }

    public function index()
    {
        $seo = $this->seo;
        $bodyClass = 'dg-theme';
        return view('resellers', compact('seo', 'bodyClass'));
    }
}