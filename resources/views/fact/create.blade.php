@extends('app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Fact</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
          <form action="{{route('fact-save')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Paragraph </label>
                  <input type="text" class="form-control"  name="fact_paragraph">
          
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Happy Client</label>
                    <input type="text" class="form-control"  name="happy_client">
            
                  </div><!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label>Projects</label>
                    <input type="number" class="form-control"  name="project">
            
                  </div> <!-- /.form-group -->
                  <div class="form-group">
                    <label>Workers</label>
                   
                    <input type="text" class="form-control" name="workers">
            
                  </div> <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Hours OF Support</label>
                    <input type="text" class="form-control" name="hours_support">
            
                  </div>
                  <!-- /.form-group -->
                 
                </div>
             
                <!-- /.col -->
            
                <div class="col-md-2">
                <button type="submit" class="btn btn-block btn-primary btn-lg">Submit</button>
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