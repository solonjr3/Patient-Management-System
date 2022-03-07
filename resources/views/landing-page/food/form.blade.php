@extends('layouts.app2')
<!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

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
              <!-- form start -->
              <form method="POST" action="{{ url('food') }}" enctype="multipart/form-data">

                @csrf 

                <div class="card-body">
                  <div class="form-group clearfix">
                    <div class="icheck-primary d-inline">
                        <input type="radio" id="bfast" name="radio">
                        <label for="bfast"> Breakfast </label>
                    </div> 
                  
                    <div class="icheck-primary d-inline">
                        <input type="radio" id="morning-snack" name="radio">
                        <label for="morning-snack"> Morning Snack </label>
                    </div>
                  
                    <div class="icheck-primary d-inline">
                        <input type="radio" id="lunch" name="radio">
                        <label for="lunch"> Lunch </label>
                    </div>
                  
                    <div class="icheck-primary d-inline">
                        <input type="radio" id="afternoon-snack" name="radio">
                        <label for="afternoon-snack"> Afternoon Snack     
                        </label>
                    </div>
                  
                    <div class="icheck-primary d-inline">
                        <input type="radio" id="dinner" name="radio">
                        <label for="dinner"> Dinner </label>
                    </div>
                </div>
                <!-- radio button end -->

                <div class="form-group">
                    <label for="food_allocation">Number of food Arrived</label>
                    <input type="text" class="form-control" name="food_allocated" id="food_allocated" value="{{ old('food_allocated') }}" placeholder="No. of Food Arrived" autofocus>
                </div>

                <!-- Date -->
                <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <!-- time Picker -->
                <div class="bootstrap-timepicker">
                  <div class="form-group">
                    <label>Time picker:</label>

                    <div class="input-group date" id="timepicker" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#timepicker"/>
                      <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-clock"></i></div>
                      </div>
                    </div>
                    <!-- /.input group -->
                </div>

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
    <button type="button" class="btn btn-block btn-outline-secondary btn-lg" onclick="history.back()">Back</button>

<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js"></script>
<!-- bootstrap datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
  $(function () {  
    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    // //Date and time picker
    // $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
  })
</script>

@endsection