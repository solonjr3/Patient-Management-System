@if (session()->has('delete_message'))

{{-- {{ session()->forget('message') }} --}}
<div class="alert alert-success">
    {{ session()->pull('delete_message') }}
</div>
    
@elseif(session()->has('delete_message_error'))
<div class="alert alert-danger">
    {{ session()->pull('delete_message_error') }}
</div>
@endif


<form method="POST" action="{{ route('foods.destroy', $food->id) }}"  enctype="multipart/form-data">

    @method('POST')
    @csrf
    
    <div class="modal fade" id="ModalDelete{{ $food->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> {{ __('Food Delete') }} </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    You sure you want to delete <b> {{ $food->id }} ? </b>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal"> 
                        {{ __('Cancel') }} </button>
                    </button>
                    <button type="submit" class="btn btn-outline-danger"> {{ __('Delete') }}</button>
                </div>
            </div>
        </div>

    </div>

</form>