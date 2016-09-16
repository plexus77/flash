<div id="flash-overlay-modal" class="modal fade {{ $modalClass or '' }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title">{{ $title }}</h4>
            </div>

            <div class="modal-body">
                <p>{!! $message !!}</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary pull-xs-right" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
