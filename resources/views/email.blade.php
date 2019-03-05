@extends('layouts.app')

@section('content')
	<div class="row">
	    <div class="col-md-8 col-md-offset-2">
	        <div class="panel panel-default">
	            <div class="panel-heading">Create Job <a href="/" class="pull-right btn btn-primary btn-xs">Go Back</a></div>

	            <div class="panel-body">
	            	<div class="panel-body">

		                {!! Form::open(['action' => 'mailController@send', 'method' => 'POST']) !!}
		                	{{csrf_field()}}
		                	{{ Form::bsText('title', '', ['placeholder' => 'Title']) }}
		                    {{ Form::bsText('description', '', ['placeholder' => 'Description']) }}
		                    {{ Form::bsText('email', '', ['placeholder' => 'Email']) }}
		                    {{ Form::bsSubmit('send', ['class' => 'btn btn-primary']) }}
		                {!! Form::close() !!}
		                
		            </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection