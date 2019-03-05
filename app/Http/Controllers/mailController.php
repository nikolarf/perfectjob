<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\mail\SendMail;
use App\mail\SendMailEmp;
use App\Job;
use DB;


class mailController extends Controller
{	
	/*
    public function send(){
    	Mail::send(['text'=>'mail'], ['name', 'Nikola'], function ($message){
    		$message->to('laraveltest1912974@gmail.com', 'To Laravel')->subject('Laravel');
    		$message->from('laraveltest1912974@gmail.com', 'Laravel');
    	});
    }
    */

    
    public function send(Request $request){

        $mailfound = 0;
        $email = $request->input('email');
        $jobemails = DB::select('SELECT email FROM jobs WHERE email = "' . $email . '"');
        
        if(count ($jobemails)>0){
            $mailfound = 1;
        }

        if($mailfound == 0){
            Mail::send(new SendMail());
        }else{
            $job = new Job;
            $job->title = $request->input('title');
            $job->description = $request->input('description');
            $job->email = $request->input('email');
            $job->spam = 0;
            $job->user_id = 111111;

            $job->save();
        }

        Mail::send(new SendMailEmp());
        return redirect()->action('JobsController@index')->with('success', 'Thank you!');
	}

    
	public function email(){
    	return view('email');
	}
    
    	
    
}
