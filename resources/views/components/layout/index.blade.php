<!DOCTYPE html>
<html lang="ES">
<head>
  {{-- SEO BASIC --}}
  <meta charset="utf-8">
  <title>{{$title}}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="keywords" content="{{$keywords}}">
  <meta name="description" content="{{$description}}">
  <meta name="subject" content="{{$subject}}">
  <meta name="author" content="{{$autor}}">
  <meta name="copyright" content="{{$copyright}}">
  <meta name="language" content="es">
  <meta name="revisit-after" content="7 days">
  <meta name="robots" content="{{$robots}}">
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
  <link rel="canonical" href="{{}}">
  {{-- TWITER SEO --}}
  <meta name="twitter:card" content="summary" />	
  <meta name="twitter:title" content="MAGIS TV INTERNATIONAL | SERIES | PELÍCULAS | DEPORTES | PREMIUM" >
  <meta name="twitter:description" content="magis tv international, disfruta del mejor contenido en full calidad, películas, series, deportes, canales en vivo y premium, netflix, prime, disney plus, entre otros." >
  <meta name="twitter:image" content="https://magistvinternational.com/img/game.webp" >
  <meta name="twitter:site" content="@Nicolas63783814" >
  <meta name="twitter:creator" content="@Nicolas63783814" >
  {{-- Open Graph  --}}
  <meta property="og:title" content="MAGIS TV INTERNATIONAL | SERIES | PELÍCULAS | DEPORTES | PREMIUM"/>
  <meta property="og:type" content="article"/>
  <meta property="og:url" content="https://magistvinternational.com"/>
  <meta property="og:site_name" content="MAGIS TV INTERNATIONAL"/>
  <meta property="og:image" content="https://magistvinternational.com/img/game.webp"/>
  <meta property="og:image:alt" content="MAGIS TV ENTRETENIMIENTO"/>	
  <meta property="og:description" content="magis tv international, disfruta del mejor contenido en full calidad, películas, series, deportes, canales en vivo y premium, netflix, prime, disney plus, entre otros." />
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

  <link href="{{ asset('img/logoglobal.webp') }}" rel="icon">
  <link href="{{ asset('img/logoglobal.webp') }}" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animacion.css') }}"  rel="stylesheet">
</head>
<body>
    <x-navs.index/>

    <main id="main">
        {{$slot}}
    </main>

    <x-footer.index/>

    <x-whatsapp/>
    <x-loading/>

  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script async src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script async src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/mobile-nav/mobile-nav.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script defer src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script defer src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
  <script defer src="{{ asset('js/main.js') }}"></script>
  <script async src="{{ asset('js/fontawesome.js') }}"></script>
</body>
</html>
