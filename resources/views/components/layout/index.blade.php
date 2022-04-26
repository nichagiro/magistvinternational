<!DOCTYPE html>
<html lang="ES">
<head>
  {{-- SEO BASIC --}}
  <meta charset="utf-8">
  <meta name="language" content="es">
  <meta name="revisit-after" content="7 days">
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="{{$keywords}}">
  <meta name="description" content="{{$description}}">
  <meta name="subject" content="{{$subject}}">
  <meta name="author" content="{{$autor}}">
  <meta name="copyright" content="{{$copyright}}">
  <meta name="robots" content="{{$robots}}">
  <link rel="canonical" href="{{$url}}">
  <title>{{$title}}</title>
  {{-- TWITER SEO --}}
  <meta name="twitter:card" content="summary" />	
  <meta name="twitter:title" content="{{$title}}" >
  <meta name="twitter:description" content="{{$description}}">
  <meta name="twitter:image" content="{{$img}}" >
  <meta name="twitter:site" content="@Nicolas63783814" >
  <meta name="twitter:creator" content="@Nicolas63783814" >
  {{-- Open Graph  --}}
  <meta property="og:type" content="{{$type}}"/>
  <meta property="og:title" content="{{$title}}"/>
  <meta property="og:url" content="{{$url}}"/>
  <meta property="og:image" content="{{$img}}"/>
  <meta property="og:image:alt" content="{{$imgAlt}}"/>	
  <meta property="og:description" content="{{$description}}">
  <meta property="og:site_name" content="{{env('APP_NAME')}}"/>
  <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "MAGIS TV INTERNATIONAL",
        "url": "https://magistvinternational.com/",
        "address": "",
        "sameAs": [
        "https://www.facebook.com/nichagiro",
        "https://www.instagram.com/magistvinter/",
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
        "ratingValue": "4.8",
        "ratingCount": "189979820"
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
  <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animacion.css') }}"  rel="stylesheet">
</head>
<body class="{{$bodyClass}}">
    <x-navs.index/>

    <main id="main">
        {{$slot}}
    </main>

    <x-footer.index/>

    <x-socials telegram={{false}}/>
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
