@extends('layouts.app')
@section('content')
<br>
<div class="container">
    <!-- general form elements -->
    <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Actor {{$actor->first_name}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                        <ul class="list-group">
                                <li class="list-group-item">{{$actor->actor_id}}</li>
                                <li class="list-group-item">{{$actor->first_name}}</li>
                                <li class="list-group-item">{{$actor->last_name}}</li>
                                <li class="list-group-item">{{$actor->last_update}}</li>
                              </ul>
                </div>
                <div class="card-footer">
                  <a href="{{url('')}}" class="btn btn-success">Back</a>
                </div>
              </form>
            
            
</div>
                <!-- /.card-body -->
</div>
@endsection