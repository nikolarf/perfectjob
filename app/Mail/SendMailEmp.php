<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;
use App\User;
use App\Job;
use DB;

class SendMailEmp extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
    {   
        $mailfound = 0;
        $email = $request->input('email');
        $jobemails = DB::select('SELECT email FROM jobs WHERE email = "' . $email . '"');
        
        if(count($jobemails)==1){
            $mailfound = 1;
        }
        
        if($mailfound == 1){
            return $this->view('mailsendemp')->to($email)->from('laraveltest1912974@gmail.com');
        }else{
            return $this->view('mailsendemp');
        }

    }
}
