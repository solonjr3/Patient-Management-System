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
        
              <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-danger">
              
            <div class="card-header">
            <h3 class="card-title">Patient Contact History</h3>
                </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                <div class="form-group">
                    <label for="places_visited"> Places visited within last 7 days: </label> <br>
                    {{-- <input type="text" class="form-control" id="places_visited" placeholder="Places Visited"> --}}
                    
                    {{-- Malls --}}
                    <label for="malls">Malls: </label>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="smNaga" id="smNaga" value="{{ old('smNaga') }}">
                        <label for="smNaga" class="custom-control-label">SM City Naga</label>
                    </div>
                    
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="robinson" id="robinson" value="{{ old('robinson') }}">
                        <label for="robinson" class="custom-control-label">Robinsons Place Naga</label>
                    </div>
                    
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="emall" id="emall" value="{{ old('emall') }}">
                        <label for="emall" class="custom-control-label">NAGALAND E-mall </label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="vista" id="vista" value="{{ old('vista') }}">
                        <label for="vista" class="custom-control-label">Vista Mall Naga </label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="yashano" id="yashano" value="{{ old('yashano') }}">
                        <label for="yashano" class="custom-control-label">Yashano Mall Naga </label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="lccMall" id="lccMall" value="{{ old('lccMall') }}">
                        <label for="lccMall" class="custom-control-label">LCC Mall Naga City</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="101shop" id="101shop" value="{{ old('101shop') }}">
                        <label for="101shop" class="custom-control-label">101 Shopping Center </label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="ncpm" id="ncpm" value="{{ old('ncpm') }}">
                        <label for="ncpm" class="custom-control-label">Naga City People's Mall </label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="grandmaster" id="grandmaster" value="{{ old('grandmaster') }}">
                        <label for="grandmaster" class="custom-control-label">Grand Master Mall </label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="winwin" value="winwin">
                        <label for="winwin" class="custom-control-label">Win Win Mall </label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="metro" value="metro">
                        <label for="metro" class="custom-control-label">Super Metro Hypermarket Naga </label>
                    </div>

                    <br>
                    {{-- Churches --}}

                    <label for="churches">Churches: </label>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="sanfrancisco" value="sanfrancisco">
                        <label for="sanfrancisco" class="custom-control-label">San Francisco Church</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="francia" value="francia">
                        <label for="francia" class="custom-control-label">Our Lady of Peñafrancia Shrine</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="basilica" value="basilica">
                        <label for="basilica" class="custom-control-label">Basilica of Our Lady Of Peñafrancia</label>
                    </div>
                    
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="fatima" value="fatima">
                        <label for="fatima" class="custom-control-label">Our Lady of Fatima Church </label>
                    </div>
                    
                </div>
              </div>

            </div>
            


          </div>

           <!-- right column -->
        <div class="col-md-6">
          <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Patient Contact History Cont.</h3>
              </div>
              <div class="card-body">
                {{-- <div class="row"> --}}
                <h5> Other places please specify: </h5> 
                <br>
                  <div class="form-group">
                    <label for="place1">Location 1</label>
                    <input type="text" class="form-control" id="place1" placeholder="Location 1">
                  </div>

                  <div class="form-group">
                    <label for="place2">Location 2</label>
                    <input type="text" class="form-control" id="place2" placeholder="Location 2">
                  </div>

                  <div class="form-group">
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
                  </div>

                </div>
              </div>

            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Patient Contact History Cont.</h3>
              </div>
              <div class="card-body">
                {{-- <div class="row"> --}}
                <h5> People who have been in close contact: </h5> 
                <br>
                  <div class="form-group">
                    <label for="person1">Person 1</label>
                    <input type="text" class="form-control" id="person1" placeholder="Person 1">
                  </div>

                  <div class="form-group">
                    <label for="person2">Person 2</label>
                    <input type="text" class="form-control" id="person2" placeholder="Person 2">
                  </div>

                  <div class="form-group">
                    <label for="person3">Person 3</label>
                    <input type="text" class="form-control" id="person3" placeholder="Person 3">
                  </div>

                  <div class="form-group">
                    <label for="person4">Person 4</label>
                    <input type="text" class="form-control" id="person4" placeholder="Person 4">
                  </div>

                  <div class="form-group">
                    <label for="person5">Person 5</label>
                    <input type="text" class="form-control" id="person5" placeholder="Person 5">
                  </div>

                </div>
              </div>

            <!-- Form Element sizes -->
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