<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use DB;

class AddJobController extends Controller
{
    public function spam($email = null){
    	$emails = DB::select('SELECT email FROM jobs');
    	DB::table('jobs')
            ->where('email', $email)
            ->update(['spam' => 1]);
    	return redirect()->action('JobsController@index')->with('success', 'Mail marked as a spam.');
    }

    public function notspam($email = null){
    	$emails = DB::select('SELECT email FROM jobs');
    	DB::table('jobs')
            ->where('email', $email)
            ->update(['spam' => 0]);
    	return redirect()->action('JobsController@index')->with('success', 'Mail approved.');
    }
}
