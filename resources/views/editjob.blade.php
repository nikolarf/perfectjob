@extends('layouts.app')

@section('content')
	<div class="row">
	    <div class="col-md-8 col-md-offset-2">
	        <div class="panel panel-default">
	            <div class="panel-heading">Edit Job <a href="/dashboard" class="pull-right btn btn-default btn-xs">Go Back</a></div>

	            <div class="panel-body">
	            	<div class="panel-body">
		                @if (session('status'))
		                    <div class="alert alert-success">
		                        {{ session('status') }}
		                    </div>
		                @endif
		                
		                {!! Form::open(['action' => ['JobsController@update', $job->id], 'method' => 'POST']) !!}
		                    {{ Form::bsText('title', $job->title, ['placeholder' => 'Title']) }}
		                    {{ Form::bsText('description', $job->description, ['placeholder' => 'Description']) }}
		                    {{ Form::bsText('email', $job->email, ['placeholder' => 'Email']) }}
		                    {{ Form::bsSubmit('submit', ['class' => 'btn btn-primary']) }}
		                    {{Form::hidden('_method', 'PUT')}}
		                {!! Form::close() !!}
		                
		            </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection