@extends('layouts.app2')
 
@section('content')
<!-- Main content -->

    
      <label for="title"><h2>Food log</h2></label>
    
    <section class="content">
      <div class="container-fluid">
        {{-- <div class="row">
          <!-- left column -->
          <div class="col-md-6"> --}}
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Food log Form</h3>
              </div>
              <!-- /.card-header -->
              <br>

              @if (session()->has('create_message'))

                <div class="alert alert-success">
                    {{ session()->get('create_message') }}
                </div>
                            
                @elseif(session()->has('create_message_error'))
                <div class="alert alert-danger">
                  {{ session()->get('create_message_error') }}
                </div>
                @endif

              <!-- form start -->

              <form method="POST" action="{{ url('food') }}" enctype="multipart/form-data">

                @csrf 
                
                

                @if($message = Session::get('success'))
                  <div class="alert alert-success alert-block"> 
                    <strong>{{ $message }}</strong>
                  </div>
                  <br>
                @endif

                <div class="card-body">
                  <div class="form-group">
                    <label for="food_category">Food Category</label>
                    <input type="text" class="form-control" name="food_category" id="food_category" value="{{ old('food_category') }}" placeholder="Breakfast, Snack, Lunch, Dinner" autofocus>
                    <span class="text-danger">{{ $errors->first('food_category') }}</span>
                  </div>

                <div class="form-group">
                    <label for="food_allocation">Number of food Arrived</label>
                    <input type="text" class="form-control" name="food_allocated" id="food_allocated" value="{{ old('food_allocated') }}" placeholder="No. of Food Arrived">
                    <span class="text-danger">{{ $errors->first('food_allocated') }}</span>
                </div>

                {{-- <!-- Date -->
                <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="food_date" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#food_date"/>
                    
                    <div class="input-group-append" data-target="#food_date" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                    </div>
                  <span class="text-danger">{{ $errors->first('food_date') }}</span>
                </div> --}}

                {{-- <div class="form-group">
                  <label>Date and time:</label>
                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div> --}}
                
            {{-- </div>     
          </div> --}}
        </div>
      </div>
    </section>
    <div class="card">
                <button type="submit" class="btn btn-success btn-lg">Submit</button>
    </div>
    <button type="button" class="btn btn-block btn-outline-secondary btn-lg" onclick="parent.location='homepage'">Back</button>

<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!--datepicker -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script type="text/javascript">
  $(function () {  

    //Date picker
    $('#food_date').datetimepicker({
        format: 'L'
    });

  })
</script>

@endsection