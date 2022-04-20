<x-layout.index :seo="$seo">
  <x-home.intro/> 
  <x-home.paquetesIncluidos/>
  <x-home.deportes/>
  <x-home.suscripcion/>    
  <x-home.vod/>    
  <x-home.pagos/>

  <p id="slider_id" data-id="1" class="d-none"></p>
  <span id="slider-1"  class="d-none">{{asset('img/slider_caricatura.webp')}}</span>
  <span id="slider-2"  class="d-none">{{asset('img/venom.webp')}}</span>
  <span id="slider-3"  class="d-none">{{asset('img/shang.webp')}}</span>
</x-layout.index>


