@extends('app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h1>Category</h1>
          </div>
          <div class="col-sm-3">
           <a href="Category"> <button type="button" class="btn btn-block btn-primary btn-lg">Add New Customer</button></a>
           
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

        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Category as $data)
            
      
      <tr>

        <td>{{$data->cat_name}}</td>
        <td>
          

                 <a class="btn btn-primary" href="{{ route('Category-edit',$data->id) }}">Edit</a> 

              
  
                <a href="{{ route('Category-destroy',$data->id) }}" class="btn btn-danger">Delete</a>
            
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
