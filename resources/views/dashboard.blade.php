@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="pull-right"><a href="/jobs/create" class="btn btn-success btn-xs">Add Job</a></span></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your Jobs</h3>
                    @if(count($jobs))
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($jobs as $job)
                                <tr>
                                    <td>{{$job->title}}</td>
                                    <td>{{$job->description}}</td>
                                    <td><a class="btn btn-default pull-right" href="/jobs/{{$job->id}}/edit">Edit</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['JobsController@destroy', $job->id], 'method' => 'POST', 'class' => 'pull-left', 'onsubmit' => 'return confirm("Are you sure?")']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
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
