@extends('app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h1>Fact</h1>
          </div>
          <div class="col-sm-3">
           <a href="fact"> <button type="button" class="btn btn-block btn-primary btn-lg">Add Fact</button></a>
           
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
        <th scope="col">Paragraph</th>
        <th scope="col">Happy Client</th>
        <th scope="col">project</th>
        <th scope="col">workers</th>
        <th scope="col">Hours Support</th>
    
 
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($fact as $data)
            
      
      <tr>
        <td>{{$data->fact_paragraph}}</td>
        <td>{{$data->happy_client}}</td>
        <td>{{$data->project}}</td>
        <td>{{$data->workers}}</td>
        <td>{{$data->hours_support}}</td>
      
        <td>
          

                 <a class="btn btn-primary" href="{{ route('fact-edit',$data->id) }}">Edit</a> 

              
  
                <a href="{{ route('fact-destroy',$data->id) }}" class="btn btn-danger">Delete</a>
            
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
