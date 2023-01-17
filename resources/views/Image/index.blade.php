@extends('app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h1>Images</h1>
          </div>
          <div class="col-sm-3">
           <a href="Image"> <button type="button" class="btn btn-block btn-primary btn-lg">Add New Image</button></a>
           
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
        <th scope="col">Image</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Image as $data)
            
      
      <tr> 

      
     <td>
      {{$data->id}}

     </td>
            
     <td>
      {{$data->cat_name}}

     </td>
     @foreach ($data->category as $device )
     <td>
      
   
      <img src="images/{{$device->image}}" width="100px" height="50px">
        <br>
 
  </td>
  @endforeach
        <td>
          

                 <a class="btn btn-primary" href="{{ route('Image-edit',$data->id) }}">Edit</a> 

              
  
                <a href="{{ route('Image-destroy',$data->id) }}" class="btn btn-danger">Delete</a>
            
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
