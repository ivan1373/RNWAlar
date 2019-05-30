@extends('layouts.app')
@section('content')
    <div class="container">
      <br>
      @if(session()->has('status'))
              
              <div class="alert alert-success">
                  <strong>{{session()->get('status')}}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    &times;</button>
              </div>
                  
            @endif
            @if(session()->has('delete'))
              
              <div class="alert alert-danger">
                  <strong>{{session()->get('delete')}}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    &times;</button>
              </div>
                  
            @endif
            @if(session()->has('update'))
              
              <div class="alert alert-success">
                  <strong>{{session()->get('update')}}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    &times;</button>
              </div>
                  
            @endif
        <br>
        <div class="table-responsive">
            <table id="example" class="table">
                <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Last Update</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($actors as $actor)
                    <tr>
                        <th scope="row">{{$actor->actor_id}}</th>
                        <td>{{$actor->first_name}}</td>
                        <td>{{$actor->last_name}}</td>
                        <td>{{Carbon\Carbon::parse($actor->last_update)->diffForHumans()}}</td>
                        <td><a href="{{url('')}}/{{$actor->actor_id}}" class="btn btn-info">Show</a>
                          <a href="{{url('')}}/{{$actor->actor_id}}/edit" class="btn btn-success">Edit</a>
                          <form method="post" action="{{url('')}}/{{$actor->actor_id}}">
                            @csrf
                            {{method_field('delete')}}
                            <button type="submit" onclick="return confirm('Da li ste sigurni?')" class="btn btn-danger">Delete</button>
                        </form></td>
                    </tr>
                    @endforeach
                    
                  </tbody>
            </table>
          </div>
    </div>
@endsection