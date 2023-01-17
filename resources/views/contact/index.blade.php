@extends('app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h1>Contact</h1>
          </div>
          <div class="col-sm-3">
           <a href="contact"> <button type="button" class="btn btn-block btn-primary btn-lg">Add Contact</button></a>
           
          </div>
        </div>
      </div>

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
        <th scope="col">Contact</th>
        <th scope="col">Email</th>
        <th scope="col">Location</th>
       
    
 
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($contact as $data)
            
      
      <tr>
        <td>{{$data->contact}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->location}}</td>
   
      
        <td>
          

                 <a class="btn btn-primary" href="{{ route('contact-edit',$data->id) }}">Edit</a> 

              
  
                <a href="{{ route('contact-destroy',$data->id) }}" class="btn btn-danger">Delete</a>
            
        </td>
      
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
