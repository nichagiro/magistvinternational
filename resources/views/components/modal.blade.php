<!-- Modal -->
<div class="modal fade" id={{$id}} tabindex="-1" role="dialog" aria-labelledby={{$id}} aria-hidden="true">
    <div class="modal-dialog modal-{{$screen}}" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title col-12 text-center" id="{{$id}}_title">{{$title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-white" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body dg-blue">
                {{$slot}}
                <div class="d-flex container justify-content-end container pb-3 pt-1 px-5">
                    {{$button}}
                    <button type="button" class="btn bg-blue-dark text-white mt-3 ml-3" style="border: 1px white solid" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
