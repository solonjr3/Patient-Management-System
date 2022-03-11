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
              <p class="lead mb-5"> College of Computer Studies <br> Ateneo de Naga University, P. Santos St., Naga Camarines Sur<br>
                Phone: (054) 881 4128 
              </p>
              <p class="lead mb-5">Alec Anthony Arejola<br>
                Phone: +63 931 9981 746 
              </p>
              <p class="lead mb-5">Solon Ayala Jr.<br>
                Phone: +63 929 0420 536
              </p>
                            
            </div>
          </div>
        
          <div class="col-7">
            
            @if (session()->has('create_message'))

                <div class="alert alert-success">
                    {{ session()->get('create_message') }}
                </div>
                            
            @elseif(session()->has('create_message_error'))
                <div class="alert alert-danger">
                  {{ session()->get('create_message_error') }}
                </div>
            @endif

            <form action="{{ url('contact') }}" method="POST" accept-charset="utf-8">
                
                @if($message = Session::get('success'))
                  <div class="alert alert-success alert-block"> 
                    <strong>{{ $message }}</strong>
                  </div>
                  <br>
                @endif
              
          @csrf

            <div class="form-group">
              <label for="name">First Name & Last Name</label>
              <input type="text"  name="name" class="form-control" id="name" value="{{ old('name') }}"/>
              <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
            <div class="form-group">
              <label for="email">E-Mail</label>
              <input type="email" name="email" class="form-control" id="email"  value="{{ old('email') }}" />
              <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" name="subject" class="form-control" id="subject" value="{{ old('subject') }}" />
              <span class="text-danger">{{ $errors->first('subject') }}</span>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="message" id="message" class="form-control" rows="4" value="{{ old('message') }}"></textarea>
              <span class="text-danger">{{ $errors->first('message') }}</span>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Send message">
              <input type="button" class="btn btn-secondary" value="Back" onclick="history.back()">
            </div>
          </form>
          </div>
        </div>
      </div>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection