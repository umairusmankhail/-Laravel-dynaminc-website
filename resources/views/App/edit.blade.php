@extends('app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">App Images</a></li>
              <li class="breadcrumb-item active">Customer Form</li>
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
          <form method="post" action="{{ route('App-update',$App->id) }}"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="row">
           
              <!-- /.col -->
              <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control"  value="{{ $App->image }}"  name="bgimage">
                <img src="{{asset('images/'.$App->image)}}" width="90px" height="90px">
           
              </div> <!-- /.form-group -->
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="col-md-2">
              <button type="submit" class="btn btn-block btn-primary btn-lg">Submit</button>
              </div>
            </form>
         
          </div>
          <!-- /.card-body -->
       
        </div>
        <!-- /.card -->
<!--end row-->
@endsection