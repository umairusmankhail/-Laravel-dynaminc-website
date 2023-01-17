@extends('app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add About</h1>
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
          <form action="{{route('about-update',$about->id)}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Paragraph </label>
                  <input type="text" value="{{$about->paragraph_one}}" class="form-control"  name="paragragh_one">
          
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label>Paragraph 2</label>
                    <input type="text" value="{{$about->paragraph_two}}" class="form-control" placeholder="Address" name="paragraph_two">
            
                  </div><!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label>Age</label>
                    <input type="number"value="{{$about->age}}" class="form-control"  name="age">
            
                  </div> <!-- /.form-group -->
                  <div class="form-group">
                    <label>Email</label>
                   
                    <input type="email" value="{{$about->email}}" class="form-control" name="email">
            
                  </div> <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Birthday</label>
                    <input type="date" value="{{$about->date}}" class="form-control" name="birthday">
            
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                      <label>Website</label>
                      <input type="text" value="{{$about->website}}" class="form-control" name="website">
            
                    </div><!-- /.form-group -->
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="number"value="{{$about->phone}}" class="form-control" name="phone">
            
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                      <label>City</label>
                      <input type="text" value="{{$about->city}}" class="form-control" name="city">
            
                    </div><!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Degree</label>
                      <input type="text" value="{{$about->degree}}" class="form-control" name="degree">
            
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                      <label>Freelance</label>
                      <input type="text" value="{{$about->freelance}}" class="form-control" name="freelance">
              
                    </div> <!-- /.form-group -->
                   
                </div>
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