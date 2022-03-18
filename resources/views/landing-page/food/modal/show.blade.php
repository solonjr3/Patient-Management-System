<div class="modal fade" id="ModalShow{{ $food->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> {{ __('Food Details') }} </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Food Category
                    <h3><b> {{ $food->food_category }} </b></h3>
                    </br>
                    
                    No. of food arrived :
                    <h5><b> {{ $food->food_allocated }} </b></h5>
                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal"> 
                        {{ __('Close') }} </button>
                    </button>
                </div>
            </div>
        </div>
    </div>

@push('script')     
<script>
  $(document).ready( function() {
    $('#FoodTable').DataTable({
      
      processing:  true;
      serverSide: true;
      ajax: '{!! route('food') !!}',
      columns: [

        { data: 'id', name: 'id'},
        { data: 'name', name: 'name'},
        { data: 'email', name: 'email'},
        { data: 'subject', name: 'subject'},
        { data: 'message', name: 'message'},

      ]
    
    });
  } );
</script>

@endpush