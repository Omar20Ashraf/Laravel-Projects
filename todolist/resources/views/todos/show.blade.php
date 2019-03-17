@extends('layouts.app')

@section('content')

  <a class="btn btn-default" href="/">Go Back</a>
  <h1>
    <a href="/todo/{{$todo->id}}">{{$todo->text}}</a> 
  </h1>  
    <div class="label label-danger">{{$todo->due}}</div>
  
  <hr>
  <p>{{$todo->body}}</p>
  <br><br>

  <a class="btn btn-default" href="/todo/{{$todo->id}}/edit">Edit</a>
  {!! Form::open(['action' => ['TodoCtrl@destroy',$todo->id], 
  				  'method' => 'POST','class'=>'pull-right']) !!}

      {{ Form::hidden('_method','DELETE') }}
    {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
  {!! Form::close() !!}
@endsection
