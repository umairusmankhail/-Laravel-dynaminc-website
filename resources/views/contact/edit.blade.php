@extends('app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Contact</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Skill</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
       
          <!-- /.card-header -->
          <form action="{{route('contact-update',$contact->id)}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Contact </label>
                  <input type="text" value="{{$contact->contact}}" class="form-control"  name="contact">
          
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" value="{{$contact->email}}" class="form-control"  name="email">
            
                  </div>
                  <div class="form-group">
                    <label>Location</label>
                    <input type="text" value="{{$contact->location}}" class="form-control"  name="location">
            
                  </div>
                  <!-- /.form-group -->
              </div></div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-block btn-primary btn-lg">Submit</button>
                </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

     
              <!-- /.row -->
            </form>
          </div>
          <!-- /.card-body -->
       
        </div>
        <!-- /.card -->
<!--end row-->
@endsection