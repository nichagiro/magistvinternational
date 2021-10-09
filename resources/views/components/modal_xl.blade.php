<!-- Modal -->
<div class="modal fade" id={{$id}} tabindex="-1" role="dialog" aria-labelledby={{$id}} aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-theme text-white">
                <h5 class="modal-title col-12 text-center" id="{{$id}}_title">{{$title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-white" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body dg-theme">
                {{$slot}}
                <div class="d-flex container justify-content-end container pb-3 pt-1 px-5">
                    @if (!$ok)
                        <button type="button" class="btn btn-primary">{{$ok_name}}</button>
                    @endif
                    @if ($descargar)
                        <a href="{{ asset('files/manual_instalacion_App.pdf') }}" target="file">
                            <button type="button" class="btn bg-theme text-white mt-3 mr-2" style="border: 1px white solid">Manual de instalación</button>
                        </a>
                    @endif
                    <button type="button" class="btn bg-theme text-white mt-3" style="border: 1px white solid" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>