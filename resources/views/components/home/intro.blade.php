<section id="intro" class="clearfix">
    <div class="container">
      <div class="intro-info">
        <h2>TELEVISIÓN<br><span>EN VIVO</span><br>PARA TU HOGAR</h2>
        <b class="text-white text-xs-justify">
          MAGIS TV es una aplicación innovadora, exclusiva para dispositivos Android,
          la cuál mediante nuestro servicio de IPTV Latino reproduce en una interfaz sencilla canales en HD. Somos el
          servicio de IPTV con mayor estabilidad, contenido y la mejor experiencia de usuario. Servidores privados y dedicados para
          brindar la mayor estabilidad en su programación.
        </b>
        <div class="row py-3">
          <div class="col-4">
            <img src="{{ asset('img/hd.webp') }}" alt="beneficio" class="img-fluid">
          </div>
          <div class="col-4">
            <img src="{{ asset('img/3pantallas.webp') }}" alt="beneficio" class="img-fluid">
          </div>
          <div class="col-4">
            <img src="{{ asset('img/mb.webp') }}" alt="beneficio" class="img-fluid">
          </div>
        </div>
        <div>
          {{-- modal --}}
          <button data-toggle="modal" data-target="#app_magis" class="btn-get-started mt-2">Descargar</button>
          {{-- component --}}
          <x-modal_xl ok="false" descargar="true" length="xl" title="DESCARGA E INSTALA LA APP" rounded="true" id="app_magis">
            <div class="row p-3 justify-content-around">
              <div class="col-12 card-md-3 dg-green px-4 py-5 text-white radius_adaptable">
                <div class="d-flex align-items-center justify-content-center">
                  <i class="fab fa-android fa-3x"></i>
                  <p class="h4 font-weight-bold pl-2">Android</p>
                </div>
                <div class="d-flex justify-content-center mt-2">
                  <a download href="{{ asset('app/magis_v4.3.0_mobile.apk') }}" id="btn-download">Descargar</a>
                </div>
                <div class="text-center">
                  <small>Smartphone con android superior a 5.1</small>
                </div>
              </div>
              <div class="my-xs-3 col-12 card-md-3 dg-red px-4 py-5 text-white radius_adaptable">
                <div class="d-flex align-items-center justify-content-center">
                  <i class="fas fa-tv fa-3x"></i>
                  <p class="h4 font-weight-bold pl-2">Android TV</p>
                </div>
                <div class="d-flex justify-content-center mt-2">
                  <a download href="{{ asset('app/magis_v4.3.0_tv.apk') }}" id="btn-download">Descargar</a>
                </div>
                <div class="text-center">
                  <small>TV BOX / Android TV / Mi Box Xiaomi</small>
                </div>
              </div>
              <div class="col-12 card-md-3 dg-blue px-4 py-5 text-white radius_adaptable">
                <div class="d-flex align-items-center justify-content-center">
                  <i class="fab fa-napster fa-3x"></i>
                  <p class="h4 font-weight-bold pl-2">Fire TV</p>
                </div>
                <div class="d-flex justify-content-center mt-2">
                  <a download href="{{ asset('app/magis_v4.3.0_tv.apk') }}" id="btn-download">Descargar</a>
                </div>
                <div class="text-center">
                  <small >Fire TV Stick / HD / 4K / Lite / Cube</small>
                </div>
            </div>
          </x-modal>
        </div>
      </div>
    </div>
  </section>