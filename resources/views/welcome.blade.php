<x-layout.index :seo="$seo" :bodyClass="$bodyClass">
  <x-home.intro/> 
  <x-home.paquetesIncluidos/>
  <x-home.exclusivos/>
  <x-home.deportes/>
  <x-home.suscripcion/>    
  <x-home.vod/>    
  <x-home.pagos/>

  {{-- IAMGES CARRUSEL --}}
  <span id="slider-1"  class="d-none">{{asset('img/sing.webp')}}</span>
  <span id="slider-2"  class="d-none">{{asset('img/primate.webp')}}</span>
  <span id="slider-3"  class="d-none">{{asset('img/batman.webp')}}</span>


</x-layout.index>


