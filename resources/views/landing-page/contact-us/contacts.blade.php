@extends('layouts.app2')

@section('content')

<div class="card-body">
                <table id="contacts_table" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                    
                    <tbody >
                        @foreach ($contacts as $contact )
                            <tr>
                                <td>
                                    {{ $contact->id }}
                                </td>
                                <td>
                                    {{ $contact->name }}
                                </td>
                                
                                <td>
                                    {{ $contact->email }}
                                </td>
                                
                                <td>
                                    {{ $contact->subject }} 
                                </td>
                                
                                <td>
                                    {{ $contact->message }} <br>
                                </td>
                                
                                <td>
                                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#ModalShow{{ $contact->id }}">
                                        {{ __('Show') }}
                                    </a>
                  
                                    <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#ModalDelete{{ $contact->id }}">
                                        {{ __('Delete') }}
                                    </a>

                                </td>
                                
                                @include('landing-page.contact-us.modal.show') 
                              
                                @include('landing-page.contact-us.modal.delete')
                                
                            </tr>
                        @endforeach
                    </tbody>
            </table>
</div>
    

@endsection

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