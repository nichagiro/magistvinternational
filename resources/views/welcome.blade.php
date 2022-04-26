<x-layout :seo="$seo" :bodyClass="$bodyClass">
  <x-intro-home/> 
  <x-home.paquetes-incluidos/>
  <x-exclusivos/>
  <x-deportes/>
  <x-suscripcion/> 
  <x-invitacion-reseller/>   
  <x-vod/>    

  {{-- IAMGES CARRUSEL --}}
  <span id="slider-1"  class="d-none">{{asset('img/sing.webp')}}</span>
  <span id="slider-2"  class="d-none">{{asset('img/gucci.webp')}}</span>
  <span id="slider-3"  class="d-none">{{asset('img/tinder.webp')}}</span>
  <span id="slider-4"  class="d-none">{{asset('img/dog-zapato_1.webp')}}</span>

</x-layout>


