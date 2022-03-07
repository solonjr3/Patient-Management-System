@extends('layouts.app2')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-light">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact us</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card bg-dark">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
              <h2>Patient Management System</h2>
              <p class="lead mb-5">Ateneo de Naga University P. Santos St., Naga Camarines Sur<br>
                Phone: 054 472 2368 ext 2422 
              </p>
              <p class="lead mb-5">Alec Anthony Arejola<br>
                Phone: 054 472 2368 ext 2422 
              </p>
              <p class="lead mb-5">Solon Ayala Jr.<br>
                Phone: +63 929 0420 536
              </p>
                            
            </div>
          </div>
          <div class="col-7">
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" id="inputName" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputEmail">E-Mail</label>
              <input type="email" id="inputEmail" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputSubject">Subject</label>
              <input type="text" id="inputSubject" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputMessage">Message</label>
              <textarea id="inputMessage" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Send message">
              <input type="button" class="btn btn-secondary" value="Back" onclick="history.back()">
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection