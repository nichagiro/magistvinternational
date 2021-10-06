<!DOCTYPE html>
<html lang="ES">
<head>
  {{-- SEO BASIC --}}
  <meta charset="utf-8">
  <title>MAGIS TV INTERNATIONAL | SERIES | PELICULAS | DEPORTES |</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="magis tv international, series, peliculas, deportes, premium, netflix, prime, magi" name="keywords">
  <meta content="magis tv international, disfruta del mejor contenido en full calidad, peliculas, series, deportes, canales en vivo y premium, netflix, prime, disney plus, entre otros." name="description">
  <meta name="subject" content="Productos cosmeticos">
  <meta name="author" content="Nicolas Chamorro Giron">
  <meta name="copyright" content="© overweb">
  <meta name="language" content="es">
  <meta name="revisit-after" content="7 days">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
  <link rel="canonical" href="https://magistvinternational.com/">
  {{-- TWITER SEO --}}
  <meta name="twitter:card" content="summary" />	
  <meta name="twitter:title" content="MAGIS TV INTERNATIONAL | SERIES | PELICULAS | DEPORTES | PREMIUM" >
  <meta name="twitter:description" content="magis tv international, disfruta del mejor contenido en full calidad, peliculas, series, deportes, canales en vivo y premium, netflix, prime, disney plus, entre otros." >
  <meta name="twitter:image" content="https://magistvinternational.com/img/vengadores.webp" >
  <meta name="twitter:site" content="@Nicolas63783814" >
  <meta name="twitter:creator" content="@Nicolas63783814" >
  {{-- Open Graph  --}}
  <meta property="og:title" content="MAGIS TV INTERNATIONAL | SERIES | PELICULAS | DEPORTES | PREMIUM"/>
  <meta property="og:type" content="article"/>
  <meta property="og:url" content="https://magistvinternational.com"/>
  <meta property="og:site_name" content="MAGIS TV INTERNATIONAL"/>
  <meta property="og:image" content="https://magistvinternational.com/img/vengadores.webp"/>
  <meta property="og:image:alt" content="MAGIS TV ENTRETENIMIENTO"/>	
  <meta property="og:description" content="magis tv international, disfruta del mejor contenido en full calidad, peliculas, series, deportes, canales en vivo y premium, netflix, prime, disney plus, entre otros." />
  <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "MAGIS TV INTERNATIONAL",
        "url": "https://magistvinternational.com/",
        "address": "",
        "sameAs": [
        "https://www.facebook.com/nichagiro",
        "https://www.instagram.com/nicolaschamorrogiron/",
        "https://linkedin.com/in/nicolas-chamorro-9aa594196"
        ]
    }
  </script>
  {{-- DATOS STRUCTURE --}}
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "magisTV",
      "operatingSystem": "ANDROID",
      "applicationCategory": "EntertainmentApplication",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.7",
        "ratingCount": "152949864"
      },
      "offers": {
        "@type": "Offer",
        "price": "27.00",
        "priceCurrency": "USD"
      }
    }
    </script>
  <!-- Favicons -->
  <link href="{{ asset('img/logoglobal.webp') }}" rel="icon">
  <link href="{{ asset('img/logoglobal.webp') }}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animacion.css') }}"  rel="stylesheet">
</head>
<body>
{{-- HEADER --}}
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo float-left row d-flex align-items-center">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light">
          <a href="#header" class="row d-flex align-items-center">
            <img src="{{ asset('img/logoglobal.webp') }}" alt="magistv" class="img-fluid">
            <span id="title" class="d-none d-md-block text-white pl-2">MAGISTVINTERNATIONAL</span>
          </a>
        </h1> 
      </div>
      <nav id="menu" class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Inicio</a></li>
          <li><a href="#services">Deportes</a></li>
          <li><a href="#why-us">Suscripción</a></li>
          <li><a data-toggle="modal" data-target="#app_magis" class="text-white font-weight-bold hand d-none d-lg-block">Aplicación</a></li>
          {{-- movil --}}
          <li><a download href="{{ asset('app/magis_v3.9.1_mobile.apk') }}" class="text-danger font-weight-bold hand d-lg-none">Aplicación</a></li>
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header>
  <!-- #header -->
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">
      <div class="intro-info">
        <h2>Series<br><span>Peliculas</span><br>Deportes</h2>
        <div>
          {{-- modal --}}
          <button data-toggle="modal" data-target="#app_magis" class="btn-get-started d-none d-lg-block">Descargar</button>
          {{-- movil --}}
          <a class="d-lg-none btn-get-started" download href="{{ asset('app/magis_v3.9.1_mobile.apk') }}">Descargar</a>
          <x-modal_xl ok="false" length="xl" title="Descargar MagisTV" id="app_magis">
            <div class="row p-3 justify-content-around">
              <div class="col-md-3 bg-success px-4 py-5 text-white rounded">
                <div class="d-flex align-items-center justify-content-center">
                  <i class="fab fa-android fa-3x"></i>
                  <p class="h4 font-weight-bold pl-2">Android</p>
                </div>
                <div class="d-flex justify-content-center mt-2">
                  <a download href="{{ asset('app/magis_v3.9.1_mobile.apk') }}" id="btn-download">Descargar</a>
                </div>
              </div>
              <div class="col-md-3 bg-danger px-4 py-5 text-white rounded">
                <div class="d-flex align-items-center justify-content-center">
                  <i class="fas fa-tv fa-3x"></i>
                  <p class="h4 font-weight-bold pl-2">Android TV</p>
                </div>
                <div class="d-flex justify-content-center mt-2">
                  <a download href="{{ asset('app/magis_v3.9.1_tv.apk') }}" id="btn-download">Descargar</a>
                </div>
              </div>
              <div class="col-md-3 bg-primary px-4 py-5 text-white rounded">
                <div class="d-flex align-items-center justify-content-center">
                  <i class="fab fa-napster fa-3x"></i>
                  <p class="h4 font-weight-bold pl-2">Fire TV</p>
                </div>
                <div class="d-flex justify-content-center mt-2">
                  <a download href="{{ asset('app/magis_v3.9.1_tv.apk') }}" id="btn-download">Descargar</a>
                </div>
              </div>
            </div>
          </x-modal>
        </div>
      </div>
    </div>
  </section><!-- #intro -->
  <main id="main">
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        {{-- SECCION DESTACADO --}}
        <header class="section-header">
          <h3>DESTACADO DEL MES</h3>
        </header>
        {{-- DESTACADO --}}
        <div class="row about-extra mb-md-5">
          <div class="col-lg-6 wow fadeInUp">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/gmRKv7n2If8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <div class="text-center">
              <img loading="lazy" src="{{ asset('img/cruella disney.webp') }}"  alt="cruella" height="100px;">
            </div>
            <p class="text-justify px-1">
              Londres, años 70. Decidida a convertirse en una exitosa diseñadora de moda, una joven y creativa estafadora
              llamada Estella (Emma Stone) se asocia con un par de ladrones para sobrevivir en las calles de la capital británica.
              Pero cuando su talento para la moda llama la atención de la legendaria diseñadora, la Baronesa von Hellman (Emma Thompson),
              Estella cambia el rumbo de su vida hasta que una serie de acontecimientos la llevan a asumir su lado malvado y a 
              convertirse en la estridente y vengativa ‘Cruella’.           
            </p>
          </div>
        </div>
        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img loading="lazy" src="{{ asset('img/canales premiun.webp') }}" class="img-fluid" alt="">
          </div>
          <div class="d-none d-sm-block col-lg-6 wow fadeInUp order-2 order-lg-1">
            <h4 class="pb-3">EXCLUSIVOS</h4>
            <p class="row">
              <img loading="lazy" style="animation-duration: 1.4s; animation-name: bounceInUp;" class="col-4  wow bounceInUp" src="{{ asset('img/bnt1.webp') }}" alt="btn">
              <img loading="lazy" style="animation-duration: 1.4s; animation-name: bounceInUp;" class="col-4  wow bounceInUp" src="{{ asset('img/btn2.webp') }}" alt="btn">
              <img loading="lazy" style="animation-duration: 1.4s; animation-name: bounceInUp;" class="col-4  wow bounceInUp" src="{{ asset('img/btn3.webp') }}" alt="btn">
            </p>
            <p class="row">
              <img loading="lazy" style="animation-duration: 1.4s; animation-name: bounceInUp;" class="col-4  wow bounceInUp" src="{{ asset('img/btn4.webp') }}" alt="btn">
              <img loading="lazy" style="animation-duration: 1.4s; animation-name: bounceInUp;" class="col-4  wow bounceInUp" src="{{ asset('img/btn-5.webp') }}" alt="btn">
            </p>
            <p class="row">
              <img loading="lazy" style="animation-duration: 1.4s; animation-name: bounceInUp;" class="col-4  wow bounceInUp" src="{{ asset('img/btn6.webp') }}" alt="btn">
            </p>
            <p class="row">
              <img loading="lazy" style="animation-duration: 1.4s; animation-name: bounceInUp;" class="col-4  wow bounceInUp" src="{{ asset('img/bt8.webp') }}" alt="btn">
            </p>
          </div>
          {{-- MOVIL --}}
          <div class="d-sm-none col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <p class="row">
              <img loading="lazy" style="animation-duration: 1.4s; animation-name: bounceInUp;" class="col-4  wow bounceInUp" src="{{ asset('img/bnt1.webp') }}" alt="btn">
              <img loading="lazy" style="animation-duration: 1.4s; animation-name: bounceInUp;" class="col-4  wow bounceInUp" src="{{ asset('img/btn2.webp') }}" alt="btn">
              <img loading="lazy" style="animation-duration: 1.4s; animation-name: bounceInUp;" class="col-4  wow bounceInUp" src="{{ asset('img/btn3.webp') }}" alt="btn">
            </p>
            <p class="row">
              <img loading="lazy" style="animation-duration: 1.4s; animation-name: bounceInUp;" class="col-4  wow bounceInUp" src="{{ asset('img/btn4.webp') }}" alt="btn">
              <img loading="lazy" style="animation-duration: 1.4s; animation-name: bounceInUp;" class="col-4  wow bounceInUp" src="{{ asset('img/btn-5.webp') }}" alt="btn">
              <img loading="lazy" style="animation-duration: 1.4s; animation-name: bounceInUp;" class="col-4  wow bounceInUp" src="{{ asset('img/btn6.webp') }}" alt="btn">
            </p>
            <p class="row">
              <img loading="lazy" style="animation-duration: 1.4s; animation-name: bounceInUp;" class="col-4  wow bounceInUp" src="{{ asset('img/bt8.webp') }}" alt="btn">
            </p>
          </div>
        </div>
      </div>
    </section><!-- #about -->
    <!--==========================
      DEPROTES
    ============================-->
    <section id="services" class="section-deporte">
      <div class="container py-5">
        <header class="section-header-white">
          <h3 class="d-none d-sm-block">DEPORTES</h3>
          <p class="h1 d-none d-sm-block">+ DE 80 CANALES DE DEPORTES DISPONIBLES.</p>
        </header>
        {{-- MOVIL --}}
        <p class="d-sm-none h1 pb-3 text-white">+ DE 80 CANALES DE DEPORTES DISPONIBLES.</p>
        <div class="row">
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <p class="description">
              Reúne a tus amigos y familiares para ver sus eventos deportivos favoritos, En MagisTV tenemos una gran
              cantidad de canales de deportes, y canales de Pases exclusivos totalmente gratis en cualquiera de nuestros planes.
            </p>
            <div class="row justify-content-center">
              <img loading="lazy" class="col-8 pt-xs-2 col-sm-4"  src="{{ asset('img/nba.webp') }}" alt="deporte">
              <img loading="lazy" class="col-8 pt-xs-2 col-sm-4"  src="{{ asset('img/game pass.webp') }}" alt="deporte">
              <img loading="lazy" class="col-8 pt-xs-2 col-sm-4"  src="{{ asset('img/mlb.webp') }}" alt="deporte">
            </div>
          </div>
          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="d-none d-sm-block pt-xs-2 pt-sm-3 owl-carousel testimonials-carousel wow fadeInUp">
                  <div class="testimonial-item row">
                    <div class="col-4">
                      <img loading="lazy" src="{{ asset('img/fox.webp')}}"  class="img-fluid rounded" alt="canal">
                    </div>
                    <div class="col-4">
                      <img loading="lazy" src="{{ asset('img/espn.webp')}}"  class="img-fluid rounded" alt="canal">
                    </div>
                    <div class="col-4">
                      <img loading="lazy" src="{{ asset('img/being.webp')}}"  class="img-fluid rounded" alt="canal">
                    </div>
                  </div>
                  <div class="testimonial-item row">
                    <div class="col-4">
                      <img loading="lazy" src="{{ asset('img/ufc.webp')}}"  class="img-fluid rounded" alt="canal">
                    </div>
                    <div class="col-4">
                      <img loading="lazy" src="{{ asset('img/tigo.webp')}}"  class="img-fluid rounded" alt="canal">
                    </div>
                    <div class="col-4">
                      <img loading="lazy" src="{{ asset('img/direct tv.webp')}}"  class="img-fluid rounded" alt="canal">
                    </div>
                  </div>
                </div>
                {{-- MOVIL --}}
                <div class="d-flex justify-content-center d-sm-none pt-xs-2 pt-sm-3 owl-carousel testimonials-carousel wow fadeInUp">
                  <div class="testimonial-item row d-flex justify-content-center">
                    <div class="col-8 d-flex justify-content-center ">
                      <img loading="lazy" src="{{ asset('img/fox.webp')}}"  class="img-fluid rounded" alt="canal">
                    </div>
                  </div>
                  <div class="testimonial-item row d-flex justify-content-center">
                    <div class="col-8 d-flex justify-content-center">
                      <img loading="lazy" src="{{ asset('img/espn.webp')}}"  class="img-fluid rounded" alt="canal">
                    </div>
                  </div>
                  <div class="testimonial-item row d-flex justify-content-center">
                    <div class="col-8 d-flex justify-content-center">
                      <img loading="lazy" src="{{ asset('img/being.webp')}}"  class="img-fluid rounded" alt="canal">
                    </div>
                  </div>
                  <div class="testimonial-item row d-flex justify-content-center">
                    <div class="col-8 d-flex justify-content-center">
                      <img loading="lazy" src="{{ asset('img/ufc.webp')}}"  class="img-fluid rounded" alt="canal">
                    </div>
                  </div>
                  <div class="testimonial-item row d-flex justify-content-center">
                    <div class="col-8 d-flex justify-content-center">
                      <img loading="lazy" src="{{ asset('img/tigo.webp')}}"  class="img-fluid rounded" alt="canal">
                    </div>
                  </div>
                  <div class="testimonial-item row d-flex justify-content-center">
                    <div class="col-8 d-flex justify-content-center">
                      <img loading="lazy" src="{{ asset('img/direct tv.webp')}}"  class="img-fluid rounded" alt="canal">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #services -->

    <!--==========================
      SUSCRIPCION
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="px-3">
        <header class="section-header">
          <h3>SUSCRIPCIÓN</h3>
          <p>CANCELA TU PLAN Y LUEGO REGISTRA TU PAGO</p>
        </header>
        {{-- PRECIOS --}}
        <div class="row row-eq-height justify-content-center">
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <h2>1 MES</h2>
                <small>Tarifa Fija</small>
              <div class="card-body">
                <b class="precio">$9</b>
                  <ul class="ul-precios text-left">
                    <div class="row border-precio align-items-center">
                      <i class="fas fa-tv"></i>
                      <span class="p-3">+800 Canales</span>
                    </div>
                    <div class="row border-precio align-items-center">
                      <i class="fas fa-video"></i>
                      <span class="p-3">HDD y FHD</span>
                    </div>
                    <div class="row border-precio align-items-center">
                      <i class="fas fa-mobile-alt"></i>
                      <span class="p-3">3 Pantallas</span>
                    </div>
                    <div class="row border-precio align-items-center">
                      <i class="fas fa-star-half-alt"></i>
                      <span class="p-3">Paquetes Premium</span>
                    </div>
                    <div class="row border-precio align-items-center">
                      <i class="fas fa-play"></i>
                      <span class="p-3">Contenido VOD</span>
                    </div>
                  </ul>
                  <a href="https://wa.me/573226424588?text=Me%20interesa%201%20mes%20de%20suscripción" class="mt-4 btn-get-started">Comprar</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <h2>3 MESES</h2>
              <div class="card-body">
                <b class="precio">$27</b>
                  <ul class="ul-precios text-left">
                    <div class="row border-precio align-items-center">
                      <i class="fas fa-tv"></i>
                      <span class="p-3">+800 Canales</span>
                    </div>
                    <div class="row border-precio align-items-center">
                      <i class="fas fa-video"></i>
                      <span class="p-3">HDD y FHD</span>
                    </div>
                    <div class="row border-precio align-items-center">
                      <i class="fas fa-mobile-alt"></i>
                      <span class="p-3">3 Pantallas</span>
                    </div>
                    <div class="row border-precio align-items-center">
                      <i class="fas fa-star-half-alt"></i>
                      <span class="p-3">Paquetes Premium</span>
                    </div>
                    <div class="row border-precio align-items-center">
                      <i class="fas fa-play"></i>
                      <span class="p-3">Contenido VOD</span>
                    </div>
                  </ul>
                  <a href="https://wa.me/573226424588?text=Me%20interesa%203%20meses%20de%20suscripción" class="mt-4 btn-get-started">Comprar</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <h2>6 MESES</h2>
                <small>1 mes gratis</small>
              <div class="card-body">
                <b class="precio">$49</b>
                  <ul class="ul-precios text-left">
                    <div class="row border-precio align-items-center">
                      <i class="fas fa-tv"></i>
                      <span class="p-3">+800 Canales</span>
                    </div>
                    <div class="row border-precio align-items-center">
                      <i class="fas fa-video"></i>
                      <span class="p-3">HDD y FHD</span>
                    </div>
                    <div class="row border-precio align-items-center">
                      <i class="fas fa-mobile-alt"></i>
                      <span class="p-3">3 Pantallas</span>
                    </div>
                    <div class="row border-precio align-items-center">
                      <i class="fas fa-star-half-alt"></i>
                      <span class="p-3">Paquetes Premium</span>
                    </div>
                    <div class="row border-precio align-items-center">
                      <i class="fas fa-play"></i>
                      <span class="p-3">Contenido VOD</span>
                    </div>
                  </ul>
                  <a href="https://wa.me/573226424588?text=Me%20interesa%206%20meses%20de%20suscripción" class="mt-4 btn-get-started">Comprar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg">
      <div class="p-3">
        <header class="section-header">
          <h3>CONTENIDO VOD</h3>
        </header>
        <p class="container text-justify">
          MAGIS TV es una aplicación innovadora, exclusiva para dispositivos Android, la cual mediante nuestro
          servicio de IPTV Latino reproduce en una interfaz sencilla canales en HD. Somos el servicio de IPTV con mayor
          estabilidad, contenido y la mejor experiencia de usuario. Servidores privados y dedicados para brindar la mayor 
          estabilidad en su programación, sin pausas ni freeze
        </p>
        <div class="pt-xs-2 pt-sm-4 pt-lg-5 row justify-content-center">
          <div class="col-lg-11">
            <div class="d-none d-md-block wow fadeInUp">
              <div class="testimonial-item row">
                <div class="col-2 client-logo rounded">
                  <img loading="lazy" src="{{ asset('img/VODhbomax.webp')}}"  class="img-fluid rounded" alt="canal">
                </div>
                <div class="col-2 client-logo rounded">
                  <img loading="lazy" src="{{ asset('img/VODdisney.webp')}}"  class="img-fluid rounded" alt="canal">
                </div>
                <div class="col-2 client-logo rounded">
                  <img loading="lazy" src="{{ asset('img/VODprime.webp')}}"  class="img-fluid rounded" alt="canal">
                </div>
                <div class="col-2 client-logo rounded">
                  <img loading="lazy" src="{{ asset('img/VODnatlix.webp')}}"  class="img-fluid rounded" alt="canal">
                </div>
                <div class="col-2 client-logo rounded">
                  <img loading="lazy" src="{{ asset('img/VODaple.webp')}}"  class="img-fluid rounded" alt="canal">
                </div>
                <div class="col-2 client-logo rounded">
                  <img loading="lazy" src="{{ asset('img/VODhulu.webp')}}"  class="img-fluid rounded" alt="canal">
                </div>
              </div>
            </div>
            {{-- MOVIL --}}
            <div class="d-md-none owl-carousel testimonials-carousel wow fadeInUp">
              <div class="testimonial-item row">
                <div class="col-6 client-logo rounded">
                  <img loading="lazy" src="{{ asset('img/VODhbomax.webp')}}"  class="img-fluid rounded" alt="canal">
                </div>
                <div class="col-6 client-logo rounded">
                  <img loading="lazy" src="{{ asset('img/VODnatlix.webp')}}"  class="img-fluid rounded" alt="canal">
                </div>
              </div>
              <div class="testimonial-item row">
                <div class="col-6 client-logo rounded">
                  <img loading="lazy" src="{{ asset('img/VODaple.webp')}}"  class="img-fluid rounded" alt="canal">
                </div>
                <div class="col-6 client-logo rounded">
                  <img loading="lazy" src="{{ asset('img/VODhulu.webp')}}"  class="img-fluid rounded" alt="canal">
                </div>
              </div>
              <div class="testimonial-item row">
                <div class="col-6 client-logo rounded">
                  <img loading="lazy" src="{{ asset('img/VODprime.webp')}}"  class="img-fluid rounded" alt="canal">
                </div>
                <div class="col-6 client-logo rounded">
                  <img loading="lazy" src="{{ asset('img/VODdisney.webp')}}"  class="img-fluid rounded" alt="canal">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>MAGIS TVI NTERNATIONAL</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a target="_blank" href="https://overweb.com.co/">OVERWEB</a>
      </div>
    </div>
  </footer><!-- #footer -->
  {{-- Whatsaap --}}
  <a href="https://wa.me/573226424588" class="back-to-top d-flex justify-content-center align-items-center pulse">
    <i class="fab fa-whatsapp fa-2x"></i>
  </a>
  <!-- Uncomment below i you want to use a preloader -->
  <div id="preloader"></div> 
  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script async src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script async src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/mobile-nav/mobile-nav.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script defer src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script defer src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
  <!-- Template Main Javascript File -->
  <script defer src="{{ asset('') }}js/main.js"></script>
  {{-- Iconos --}}
  <script async src="{{ asset('js/fontawesome.js') }}"></script>
</body>
</html>
