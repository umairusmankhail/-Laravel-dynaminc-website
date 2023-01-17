@extends('app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h1>Home</h1>
          </div>
          <div class="col-sm-3">
           <a href="{{route('about')}}"> <button type="button" class="btn btn-block btn-primary btn-lg">Add </button></a>
           
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
              
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">Paragraph one</th>
        <th scope="col">Paragraph two</th>
        <th scope="col">birthday</th>
        <th scope="col">website</th>
        <th scope="col">age</th>
        <th scope="col">Degree</th>
        <th scope="col">Action</th>
        <th scope="col">Phone</th>
        <th scope="col">Freelance</th>
        <th scope="col">Email</th>
        <th scope="col">City</th>
 
       
      </tr>
    </thead>
    <tbody>
        @foreach ($about as $data)
            
      
      <tr>
        <td>{{$data->paragraph_one}}</td>
        <td>{{$data->paragraph_two}}</td>
        <td>{{$data->birthday}}</td>
        <td>{{$data->website}}</td>
        <td>{{$data->age}}</td>
        <td>{{$data->degree}}</td>
        <td>
          

          <a class="btn btn-primary" href="{{ route('about-edit',$data->id) }}">Edit</a> 

       

         <a href="{{ route('about-destroy',$data->id) }}" class="btn btn-danger">Delete</a>
     
 </td>
        <td>{{$data->phone}}</td>
        <td>{{$data->freelance}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->city}}</td>
     
      
      </tr>

    </tbody>
    @endforeach
  </table>
</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->




</div>
<!-- ./wrapper -->
@endsection
<!-- jQuery -->
