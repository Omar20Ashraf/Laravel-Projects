@extends('layouts.app')

@section('content')

	<h3>Upload Photo</h3>
    <div class="panel-body">

		{!! Form::open(['route'=>'photos.store','method'=>'Post','files'=>true]) !!}
			{{Form::hidden('album_id',$album_id)}}
			<div class="form-group">
				{{ Form::label('title','Title') }}
				{{ Form::text('title',null,array('class'=>'form-control','placeholder'=>'Photo Title')) }}
			</div>

			<div class="form-group">
				{{ Form::label('description','Description') }}
				{{ Form::textarea('description',null,array('class'=>'form-control','placeholder'=>'Photo Description')) }}
			</div>

			<div class="form-group">
				{{ Form::label('photo','Photo') }}
				{{ Form::file('photo',null,array('class'=>'form-control')) }}
			</div>						

			{{ Form::submit('Create',array('class'=>'btn btn-default')) }}	

		{!! Form::close() !!}
    </div>

@endsection