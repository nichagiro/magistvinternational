<x-layout.index :seo="$seo" :bodyClass="$bodyClass">
  <x-home.intro/> 
  <x-home.paquetes-incluidos/>
  <x-home.exclusivos/>
  <x-home.deportes/>
  <x-home.suscripcion/> 
  <x-home.invitacion-reseller/>   
  <x-home.vod/>    

  {{-- IAMGES CARRUSEL --}}
  <span id="slider-1"  class="d-none">{{asset('img/sing.webp')}}</span>
  <span id="slider-2"  class="d-none">{{asset('img/gucci.webp')}}</span>
  <span id="slider-3"  class="d-none">{{asset('img/tinder.webp')}}</span>
  <span id="slider-4"  class="d-none">{{asset('img/dog-zapato_1.webp')}}</span>

</x-layout.index>


