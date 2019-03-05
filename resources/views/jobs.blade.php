@extends('layouts.app')

@section('content')
    
    <h1 class="text-center">Featured Jobs</h1>
    
    <br>    

    <div class="row">

        <div class="col-md-12 ">
                
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($jobs))
                        
                            @foreach($jobs as $job)
                               
                                    
                                        
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="job-listing">
                                            <div class="job-title-sec">
                                                <div class="c-logo"> <img src="{{ asset('img/Perfect-Job-Logo.png') }}" alt="" /> </div>
                                                <h3><a href="/jobs/{{$job->id}}" title="">{{$job->title}}</a></h3>
                                                <span>{{$job->description}}</span>
                                            </div>
                                            <span class="job-lctn"><i class="la la-map-marker"></i>Belgrade, Serbia</span>
                                            <span class="fav-job"><i class="la la-heart-o"></i></span>
                                            <span class="job-is ft">FULL TIME</span>
                                        </div><!-- Job -->
                                    </div>
                                </div>
                                       
                                    
                                   
                            @endforeach
                        
                    @else
                        <p>No Jobs Found</p>
                    @endif
                
           
        </div>
    </div>

@endsection