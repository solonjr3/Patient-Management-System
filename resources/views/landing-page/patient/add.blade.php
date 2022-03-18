
@extends('layouts.app2')

<!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

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
                    <label for="firstname">Name</label>
                    <input type="text" class="form-control" name="first" id="firstname" value="{{ old('firstname') }}" placeholder="Patient First Name" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="middlename">Middle Name</label>
                    <input type="text" class="form-control" name="middlename" id="middlename" value="{{ old('middlename') }}" placeholder="Patient Middle Name" >
                  </div>
                  <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Patient Last Name" >
                  </div>
                  <div class="form-group">
                    <label for="namesuffix">Name Suffix </label>
                    <input type="text" class="form-control" name="namesuffix" id="namesuffix" value="{{ old('namesuffix ') }}"placeholder="e.g. Sr. , Jr. , III">
                  </div>
                  <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" name="age" id="age" value="{{ old('age') }}" placeholder="Age">
                  </div> 

                  {{-- Vaccination Status --}}
                  
                  <div class="form-group">
                  <label for="vaxxstatus">Vaccination Status</label>
                  <select class="custom-select form-control-border" name="vaxxstatus" id="vaxxstatus" value="{{ old('vaxxstatus') }}" >
                    <option>1st Dose Only</option>
                    <option>1st and 2nd dose Administered</option>
                    <option>1st and 2nd dose plus booster shot</option>
                  </select>
                </div>


                  {{-- Address --}}
                  <label for="address">Current Address:</label>                                  
                  
                  <div class="form-group">
                    <label for="houseno">House No. , Block No. , Lot No. and Street Name</label>
                    <input type="text" class="form-control" name="houseno" id="houseno" value="{{ old('houseno') }}" placeholder="House No. , Block No. , Lot No. and Street Name">
                  </div>
                  
                  <div class="form-group">   
                    <label for="barangay">Barangay</label>
                    <input type="text" class="form-control" name="barangay" id="barangay" value="{{ old('barangay') }}" placeholder="Barangay">
                  </div>
                  
                  <div class="form-group">
                    <label for="municipality"> City/Municipality </label>
                    <input type="text" class="form-control" name="municipality" id="municipality" value="{{ old('municipality') }}" placeholder="City/Municipality">
                  </div>

                  <div class="form-group">
                    <label for="province"> Province </label>
                    <input type="text" class="form-control" name="province" id="province" value="{{ old('province') }}" placeholder="Province">
                  </div>
                  
                  <div class="form-group">
                    <label for="household"> Number of People in Household <code>(including extended family)</code> </label>
                    <input type="text" class="form-control" name="household" id="household" value="{{ old('household') }}" placeholder="household">
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
            </div>
                       
          </div>  


        <!-- right column -->
        <!-- Patient Facility Information -->
        <div class="col-md-6">
          <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Patient Facility information</h3>
              </div>
              <div class="card-body">
                {{-- <div class="row"> --}}

                  <div class="form-group">
                    <label for="patientID">Patient ID: </label>
                    <input type="text" class="form-control" name="patientID" id="patientID" value="{{ old('patientID') }}" placeholder="e.g Bicol No. 24142">
                  </div>

                  <div class="form-group">
                    <label for="patient-room">Facility Room No.</label>
                    <input type="text" class="form-control" name="patient-room" id="patient-room" value="{{ old('patient-room') }}" placeholder="Room No.">
                  </div>


                </div>
                
              </div>
              <!-- Patient Health Data -->
              <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Patient Health Data</h3>
              </div>
              <div class="card-body">
                {{-- <div class="row"> --}}

                  <div class="form-group">
                    <label for="patient_health_temp">Patient Temperature </label>
                    <input type="text" class="form-control" name="patient_health_temp" id="patient_health_temp" value="{{ old('patient_health_temp') }}" placeholder="In Celcius">
                  </div>

                  <!-- Date -->
                  <div class="form-group">
                    <label>Date:</label>
                      <div class="input-group date" id="patient_health_date" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#patient_health_date" name="patient_health_date" id="patient_health_date"/>
                            <div class="input-group-append" data-target="#patient_health_date" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="patient_health_notes">Patient Medical Notes:</label>
                      <textarea name="patient_health_notes" id="patient_health_notes" class="form-control" rows="4" value="{{ old('patient_health_notes') }}"></textarea>
                      <span class="text-danger">{{ $errors->first('patient_health_notes') }}</span>
                  </div>

                </div>
            </form>
            </div>
          </div>
      </div>
              <!-- /.card-body -->
              
              <!-- /.card-body -->
            </div>
            </div>
            <!-- /.card -->

            
        </div>
         </form>
        <div class="card">

                  <button type="submit" class="btn btn-primary btn-lg">Generate QR code</button>
        </div>

        <div class="card">
                <button type="submit" class="btn btn-success btn-lg">Submit</button>
        </div>

        <button type="button" class="btn btn-block btn-outline-secondary btn-lg" onclick="parent.location='homepage'">Back</button>
    </div>

<!-- Page specific script -->  

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->



<!-- bootstrap datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
  $(function () {  
    
    //Date picker
    $('#patient_health_date').datetimepicker({
        format: 'L'
    });

  })
</script>



@endsection