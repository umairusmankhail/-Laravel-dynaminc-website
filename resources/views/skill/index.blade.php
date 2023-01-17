@extends('app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h1>Skill</h1>
          </div>
          <div class="col-sm-3">
           <a href="skill"> <button type="button" class="btn btn-block btn-primary btn-lg">Add Skill</button></a>
           
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
        <th scope="col">Skill</th>
        <th scope="col">Progress</th>
   
    
 
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($skill as $data)
            
      
      <tr>
        <td>{{$data->skill_name}}</td>
        <td>{{$data->skill_progress}}</td>
  
      
        <td>
          

                 <a class="btn btn-primary" href="{{ route('skill-edit',$data->id) }}">Edit</a> 

              
  
                <a href="{{ route('skill-destroy',$data->id) }}" class="btn btn-danger">Delete</a>
            
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
