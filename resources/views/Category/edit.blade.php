@extends('app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Card Images</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Card Images</a></li>
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
          <form method="post" action="{{ route('Category-update',$Card->id) }}"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="row">
           
              <!-- /.col -->
              <div class="form-group">
                <label>Category Name For Images</label>
                <input type="text" class="form-control"  value="{{ $Category->cat_name }}"  name="cat_name">
               
           
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