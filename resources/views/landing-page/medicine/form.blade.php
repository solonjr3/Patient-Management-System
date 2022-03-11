@extends('layouts.app2')
<!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

@section('content')
<!-- Main content -->

    
      <label for="title"><h2>Medicine log</h2></label>
    
    <section class="content">
      <div class="container-fluid">
        {{-- <div class="row">
          <!-- left column -->
          <div class="col-md-6"> --}}
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Medicine log Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('medicine') }}" enctype="multipart/form-data">

            @csrf 
            <div class="content">
                <div class="container-fluid">
                <div class="form-group">
                    <label for="medicine_name">Name of Medicine</label>
                    <input type="text" class="form-control" name="medicine_name" id="medicine_name" value="{{ old('medicine_name') }}" placeholder="No. of Food Arrived" autofocus>
                </div>

                <div class="form-group">
                    <label for="medicine_quantity">Number of Medicine Arrived</label>
                    <input type="text" class="form-control" name="medicine_quantity" id="medicine_quantity" value="{{ old('medicine_quantity') }}" placeholder="No. of Food Arrived" autofocus>
                </div>

                <!-- Date -->
                <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="medicine_date" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#medicine_date" name="medicine_date" id="medicine_date"/>
                        <div class="input-group-append" data-target="#medicine_date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
               
            </div>     
          </div>

      
          </div>
        </div>
        
    </section>
    <button type="button" class="btn btn-block btn-outline-secondary btn-lg" onclick="history.back()">Back</button>

<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
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
    $('#medicine_date').datetimepicker({
        format: 'L'
    });

  })
</script>

@endsection