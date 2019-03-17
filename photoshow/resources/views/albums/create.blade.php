@extends('layouts.app')

@section('content')

	<h3>Create Album</h3>
    <div class="panel-body">

		{!! Form::open(['route'=>'albums.store','method'=>'Post','files'=>true]) !!}

			<div class="form-group">
				{{ Form::label('name','Name') }}
				{{ Form::text('name',null,array('class'=>'form-control','placeholder'=>'Album Name')) }}
			</div>

			<div class="form-group">
				{{ Form::label('description','Description') }}
				{{ Form::textarea('description',null,array('class'=>'form-control','placeholder'=>'Album Description')) }}
			</div>

			<div class="form-group">
				{{ Form::label('cover_image','Cover Image') }}
				{{ Form::file('cover_image',null,array('class'=>'form-control','placeholder'=>'Cover Image')) }}
			</div>						

			{{ Form::submit('Create',array('class'=>'btn btn-default')) }}	

		{!! Form::close() !!}
    </div>

@endsection