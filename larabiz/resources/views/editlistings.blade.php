@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing
                	<a href="/dashboard" class="pull-right btn btn-default btn-xs">Go Back</a>
                </div>

                <div class="panel-body">

					{!! Form::open(['route'=>['listings.update',$listing->id],'method'=>'Post','files'=>true]) !!}
					{{ Form::hidden('_method','PUT') }}

						<div class="form-group">
							{{ Form::label('name','Name') }}
							{{ Form::text('name',$listing->name,array('class'=>'form-control','placeholder'=>'Company Name')) }}
						</div>

						<div class="form-group">
							{{ Form::label('website','Website') }}
							{{ Form::text('website',$listing->webbsite,array('class'=>'form-control','placeholder'=>'Company Website')) }}
						</div>

						<div class="form-group">
							{{ Form::label('email','Email') }}
							{{ Form::text('email',$listing->email,array('class'=>'form-control','placeholder'=>'Company E-mail')) }}
						</div>

						<div class="form-group">
							{{ Form::label('phone','Phone') }}
							{{ Form::text('phone',$listing->phone,array('class'=>'form-control','placeholder'=>'Company Phone')) }}
						</div>

						<div class="form-group">
							{{ Form::label('address','Address') }}
							{{ Form::text('address',$listing->address,array('class'=>'form-control','placeholder'=>'Company Address')) }}
						</div>

						<div class="form-group">
							{{ Form::label('bio','Bio') }}
							{{ Form::text('bio',$listing->bio,array('class'=>'form-control','placeholder'=>'Company Bbio')) }}
						</div>						

						{{ Form::submit('Edit',array('class'=>'btn btn-default')) }}	

					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
