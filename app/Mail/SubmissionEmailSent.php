<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubmissionEmailSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($to, $submission_number)
    {
        $this->to = $to;    
        $this->submission_number = $submission_number;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('subdept@inscompany.com')
                    ->subject('Your submission have been received')
                    ->with('body', $this->submission_number)                      
                    ->markdown('emails.submissions.sent');
    }
}
