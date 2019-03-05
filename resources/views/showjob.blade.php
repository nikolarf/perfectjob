@extends('layouts.app')

@section('content')
	<div class="row">
	    <div class="col-md-8 col-md-offset-2">
	        <div class="panel panel-default">
	            <div class="panel-heading">{{$job->title}} <a href="/" class="pull-right btn btn-primary btn-xs">Go Back</a></div>

	            <div class="panel-body">
	            	<div class="panel-body">
		                @if (session('status'))
		                    <div class="alert alert-success">
		                        {{ session('status') }}
		                    </div>
		                @endif
		                
		                <ul class="list-group">
		                	<li class="list-group-item">Title: {{$job->title}}</li>
		                	<li class="list-group-item">Description: {{$job->description}}</li>
		                	<li class="list-group-item">Email: {{$job->email}}</li>
		                </ul>
		                
		            </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection