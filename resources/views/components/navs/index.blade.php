<header id="header" class="fixed-top">
    <div class="container">
      <b class="d-none d-md-block mr-1 text-white" style="font-size: 12px"> <i class="far fa-clock"></i>  Lun - Sab: 9:00am - 8:30pm </b>
    </div>
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo float-left row d-flex align-items-center">
        <h1 class="text-light">
          <a href="#header" class="row d-flex align-items-center  justify-content-center">
            <img src="{{ asset('img/logoglobal.webp') }}" alt="magistv" class="img-fluid px-xs-3" style="margin: auto">
            <span id="title" class="d-none d-md-block text-white pl-2">MAGISTVINTERNATIONAL</span>
          </a>
        </h1> 
      </div>
      <nav id="menu" class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Inicio</a></li>
          <li><a href="/#services">Deportes</a></li>
          <li><a href="/#why-us">Suscripción</a></li>
          <li><a data-toggle="modal" data-target="#app_magis" class="text-white font-weight-bold hand">Aplicación</a></li>
          <li><a href="{{ route('resellers') }}">Resellers</a></li>
        </ul>
      </nav>
    </div>
</header>
  