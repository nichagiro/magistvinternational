<div>
    {{-- modal --}}
    <button data-toggle="modal" data-target="#app_magis" id="btn-download" class="mt-2 dg-blue px-5 py-3">Descargar</button>

    {{-- component --}}
    <x-modal  id="app_magis" title="DESCARGA E INSTALA LA APP" screen='xl' >
    <div class="row p-3 justify-content-around">
        <div class="col-12 card-md-3 bg-dark px-4 py-5 text-white radius_adaptable">
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
        <div class="my-xs-3 col-12 card-md-3 bg-dark px-4 py-5 text-white radius_adaptable">
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
        <div class="col-12 card-md-3 bg-dark px-4 py-5 text-white radius_adaptable">
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
        <x-slot name='button'>
            <a 
                href="{{asset('files/manual_instalacion_App.pdf')}}" 
                target="_blank" 
                class="btn bg-dark text-white mt-3" 
                style="border: 1px white solid"
                >
                Manual de instalación
            </a>
        </x-slot>
    </div>
    </x-modal>
</div>