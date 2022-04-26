<?php

namespace App\Providers;

use App\View\Components\footer\index as fotter;
use App\View\Components\home\deportes;
use App\View\Components\home\descargar;
use App\View\Components\home\exclusivos;
use App\View\Components\home\intro as introHome;
use App\View\Components\home\invitacionReseller;
use App\View\Components\home\pagos;
use App\View\Components\home\paquetesIncluidos;
use App\View\Components\home\suscripcion;
use App\View\Components\home\vod;
use App\View\Components\layout\index as layout;
use App\View\Components\loading;
use App\View\Components\modal;
use App\View\Components\navs\index as nav;
use App\View\Components\resellers\cardDescarga;
use App\View\Components\resellers\intro as introReseller;
use App\View\Components\resellers\precios;
use App\View\Components\socials;
use App\View\Components\whatsapp;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
    }

    public function boot()
    {
        // General
        Blade::component('footer', fotter::class);
        Blade::component('layout', layout::class);
        Blade::component('nav', nav::class);
        Blade::component('loading', loading::class);
        Blade::component('modal', modal::class);
        Blade::component('socials', socials::class);
        Blade::component('whatsapp', whatsapp::class);
        // Home
        Blade::component('deportes', deportes::class);
        Blade::component('descargar', descargar::class);
        Blade::component('exclusivos', exclusivos::class);
        Blade::component('intro-home', introHome::class);
        Blade::component('invitacion-reseller', invitacionReseller::class);
        Blade::component('pagos', pagos::class);
        Blade::component('paquetes-incluidos', paquetesIncluidos::class);
        Blade::component('suscripcion', suscripcion::class);
        Blade::component('vod', vod::class);
        // Reseller
        Blade::component('intro-reseller', introReseller::class);
        Blade::component('precios', precios::class);
        Blade::component('descarga-app', cardDescarga::class);
    }
}
