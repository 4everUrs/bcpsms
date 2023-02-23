@props([
    'name','id',
    'show' => true,
    'maxWidth' => 'md'
])

<div class="modal fade modal-{{$maxWidth}}" id="{{$id}}" tabindex="-1" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{$head}}</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{$body}}
            </div>
            <div class="modal-footer">
                {{$footer}}
            </div>
        </div>
    </div>
</div>