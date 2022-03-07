@extends('layouts.app2')


@section('content')
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Patient Management System</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- overview stats -->

    <div class="row">
    <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small card -->
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>44</h3>

              <p>Number of New Patients</p>
            </div>
          <div class="icon">
            <i class="fas fa-user-plus"></i>
          </div>
            {{-- <a href="#" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a> --}}
          </div>
        
      </div>

      <div class="col-lg-3 col-6">
        <!-- small card -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>3,541</h3>

              <p>Total Number of Patients</p>
            </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
            {{-- <a href="#" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a> --}}
          </div>
        
      </div>

      <div class="col-lg-3 col-6">
        <!-- small card -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>256</h3>

              <p>Number of Vaccinated Patients</p>
            </div>
          <div class="icon">
            <i class="fas fa-syringe"></i>
          </div>
            {{-- <a href="#" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a> --}}
          </div>
        
      </div>

      <div class="col-lg-3 col-6">
        <!-- small card -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>3,285</h3>

              <p>Number of Unvaccinated Patients</p>
            </div>
          <div class="icon">
            <i class="fas fa-exclamation-circle"></i>
          </div>
            {{-- <a href="#" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a> --}}
          </div>
        
      </div>

    </div>


    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Patients</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Add new Patient and View List of Patients</h6>
                <br>
                <br>
                {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                <a href="add-patient" class="btn btn-primary">Patient General Information and Contact Tracing form</a>
                <a href="patients" class="btn btn-secondary">View Patient List</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Food Log and Statistics</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Add, Update or View Food log and statistics</h6>
                <br>
                <br>
                {{-- <p class="card-text">Please choose one of the options below</p> --}}
                <a href="/food-form" class="btn btn-primary">Add New Record</a>
                <a href="/food" class="btn btn-secondary">View Records</a>
                {{-- <a href="#" class="btn btn-danger">View Records</a> --}}
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Medicine Log and Statistics</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Add, Update or View Food log and statistics</h6>
                <br>
                <br>
                {{-- <p class="card-text">Please choose one of the options below</p> --}}
                <a href="/medicine-form" class="btn btn-primary">Add New Record</a>
                <a href="/medicine" class="btn btn-secondary">View Records</a>
                {{-- <a href="#" class="btn btn-danger">View Records</a> --}}
              </div>
            </div>

            
            {{-- <div class="card">
              <div class="card-body">
                <h4 class="card-title">Food Distribed</h4>

                <p class="card-text">
                  Food distribution statistics
                </p>

                <a href="food" class="card-link">View Food Distribution Statistics</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Medicine Distributed</h5>

                <p class="card-text">
                  View Medicine Distribution Statistics
                </p>
                
                <a href="/medicine" class="card-link">View Medicine Distribution Statistics</a>
              </div>
            </div><!-- /.card --> --}}
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
  <!-- Control Sidebar -->
 
