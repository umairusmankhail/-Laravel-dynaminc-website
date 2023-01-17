@extends('app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">home form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
       
          <!-- /.card-header -->
          <form action="{{route('saved-data')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Full name" name="name">
          
                </div>
                <!-- /.form-group -->
          
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control"  name="home_description">
            
                  </div> 
                  
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="bgimage">
        
              </div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-block btn-primary btn-lg">Submit</button>
                </div>
 </div>
              <!-- /.col -->
             
            </div>
            <!-- /.row -->
 </form>
          </div>
          <!-- /.card-body -->
       
        </div>
        <!-- /.card -->
<!--end row-->
@endsection