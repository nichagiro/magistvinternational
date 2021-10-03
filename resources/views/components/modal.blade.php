<!-- Modal -->
<div class="modal fade" id={{$id}} tabindex="-1" role="dialog" aria-labelledby={{$id}} aria-hidden="true">
    <div class="modal-dialog {{$length}}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{$slot}}
            </div>
            <div class="modal-footer">
                @if (!$ok)
                    <button type="button" class="btn btn-primary">{{$ok_name}}</button>
                @endif
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>