@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Dashboard
                  <span class="pull-right">
                    <a href="/listings/create" class="btn btn-success btn-xs">
                      Add Listing
                    </a>
                  </span>
                </div>

                <div class="panel-body">
                    <h3>Your Listings</h3>
                    @if(count($listings))
                      <table class="table table-striped">
                        <tr>
                          <th>Company</th>
                          <th class=""> </th>
                          <th class=""></th>
                        </tr>
                        @foreach($listings as $listing)
                          <tr>
                            <td>{{$listing->name}}</td>
                            <td><a class="pull-right btn btn-default" href="/listings/{{$listing->id}}/edit">Edit</a></td>
                            <td>
                              {!! Form::open(['route'=>['listings.destroy',
                                              $listing->id],'method'=>'Post',
                                              'class'=>'pull-right',
                                              'onsubmit'=>'return confirm("Are you sure")']) 
                                              !!}          
                              {{ Form::hidden('_method','DELETE') }}
                                {{ Form::submit('Delete',array('class'=>'btn btn-danger')) }}  
                              {!! Form::close() !!}
                            </td>
                          </tr>
                        @endforeach
                      </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
