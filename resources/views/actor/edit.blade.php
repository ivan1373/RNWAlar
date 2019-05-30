@extends('layouts.app')
@section('content')
<br>
<div class="container">
    <!-- general form elements -->
    <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Editing Actor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @if($errors->any())
              <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    &times;</button>
                <ul>
                  @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <form method="post" action="{{url('')}}/{{$actor->actor_id}}/edit" role="form">
              @csrf
              {{method_field('PUT')}}
                <div class="card-body">
                  <div class="form-group">
                    <label>Actor Name</label>
                    <input type="text" class="form-control" value="{{$actor->first_name}}" name="fname">
                  </div>
                  <div class="form-group">
                    <label>Actor Lname</label>
                    <input type="text" class="form-control" value="{{$actor->last_name}}" name="lname">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
                </div>
              </form>
            
            
</div>
                <!-- /.card-body -->
</div>
@endsection