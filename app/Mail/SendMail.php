<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;
use App\User;
use App\Job;

class SendMail extends Mailable
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

        // Create Job

        $job = new Job;
        $job->title = $request->input('title');
        $job->description = $request->input('description');
        $job->email = $request->input('email');
        $job->spam = 1;
        $job->user_id = 111111;

        $job->save();



        return $this->view('mailsend', ['title' => $request->title, 'description' => $request->description, 'email' => $request->email])
        ->to('laraveltest1912974@gmail.com')
        ->from('laraveltest1912974@gmail.com');

    }
}
