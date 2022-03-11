<div class="modal fade" id="ModalShow{{ $contact->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> {{ __('Contact Details') }} </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3><b> {{ $contact->name }} </b></h3>
                    </br>
                    
                    Email:
                    <h5><b> {{ $contact->email }} </b></h5>
                    </br>
                    </br>
                    
                    Subject:
                    <h5><b> {{ $contact->subject }} </b></h5>

                    Message: </br></br>
                    <h5><b> {{ $contact->message }} </b></h5>
                    

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
    $('#ContactTable').DataTable({
      
      processing:  true;
      serverSide: true;
      ajax: '{!! route('contacts.index') !!}',
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