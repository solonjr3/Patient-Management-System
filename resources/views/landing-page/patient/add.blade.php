{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Patients</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body> --}}

@extends('layouts.app2')

@section('content')
<!-- Main content -->
  <div class="content-wrapper">
    
      <label for="title"><h2>Patient Information and Contact Tracing form</h2></label>
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Patient Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('patients') }}" enctype="multipart/form-data">

                @csrf 

                <div class="card-body">
                  <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Patient First Name">
                  </div>
                  <div class="form-group">
                    <label for="middlename">Middle Name</label>
                    <input type="text" class="form-control" id="middlename" placeholder="Patient Middle Name">
                  </div>
                  <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Patient Last Name">
                  </div>
                  <div class="form-group">
                    <label for="namesuffix">Name Suffix </label>
                    <input type="text" class="form-control" id="namesuffix" placeholder="e.g. Sr. , Jr. , III">
                  </div>
                  <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" placeholder="Age">
                  </div> 

                  {{-- Vaccination Status --}}
                  
                  <div class="form-group">
                  <label for="vaxxstatus">Vaccination Status</label>
                  <select class="custom-select form-control-border" id="vaxxstatus" >
                    <option>1st Dose Currently</option>
                    <option>1st and 2nd dose Administered</option>
                    <option>1st and 2nd dose plus booster shot</option>
                  </select>
                </div>


                  {{-- Address --}}
                  <label for="address">Current Address:</label>                                  
                  
                  <div class="form-group">
                    <label for="houseno">House No. , Lot No. , Block No. and Street Name</label>
                    <input type="text" class="form-control" id="houseno" placeholder="House No. , Lot No. , Block No. and Street Name">
                  </div>
                  
                  <div class="form-group">   
                    <label for="barangay">Barangay</label>
                    <input type="text" class="form-control" id="barangay" placeholder="Barangay">
                  </div>
                  
                  <div class="form-group">
                    <label for="municipality"> City/Municipality </label>
                    <input type="text" class="form-control" id="municipality" placeholder="City/Municipality">
                  </div>

                  <div class="form-group">
                    <label for="province"> Province </label>
                    <input type="text" class="form-control" id="province" placeholder="Province">
                  </div>
                  
                  <div class="form-group">
                    <label for="household"> Number of People in Household <code>(including extended family)</code> </label>
                    <input type="text" class="form-control" id="household" placeholder="household">
                  </div>
                  
                </div>
                  
                  {{-- <div class="form-group">
                    <label for="exampleInputFile">Patient/Patient's Guardian Government ID</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> --}}
              </form>
            </div>

            
          </div>  


        <!-- right column -->
        <div class="col-md-6">
          <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Patient Facility information</h3>
              </div>
              <div class="card-body">
                {{-- <div class="row"> --}}

                  <div class="form-group">
                    <label for="patientID">Patient ID: </label>
                    <input type="text" class="form-control" id="patientID" placeholder="e.g Bicol No. 24142">
                  </div>

                  <div class="form-group">
                    <label for="patient-room">Facility Room No.</label>
                    <input type="text" class="form-control" id="patient-room" placeholder="Room No.">
                  </div>

                  {{-- <div class="form-group">
                    <label for="place3">Location 3</label>
                    <input type="text" class="form-control" id="place3" placeholder="Location 3">
                  </div>

                  <div class="form-group">
                    <label for="place4">Location 4</label>
                    <input type="text" class="form-control" id="place4" placeholder="Location 4">
                  </div>

                  <div class="form-group">
                    <label for="place5">Location 5</label>
                    <input type="text" class="form-control" id="place5" placeholder="Location 5">
                  </div> --}}

                </div>
              </div>

            <!-- Form Element sizes -->
        

        
              <!-- /.card-body -->
              
              <!-- /.card-body -->
            </div>
            </div>
            <!-- /.card -->

            
        </div>

        <div class="card">

                  <button type="submit" class="btn btn-primary btn-lg">Generate QR code</button>
        </div>

        <div class="card">
                <button type="submit" class="btn btn-success btn-lg">Submit</button>
        </div>

        <button type="button" class="btn btn-block btn-outline-secondary btn-lg" onclick="history.back()">Back</button>
    </div>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>


<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
{{-- </body>
</html> --}}
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

@endsection