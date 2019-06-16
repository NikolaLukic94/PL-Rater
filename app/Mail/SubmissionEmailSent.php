<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubmissionEmailSent extends Mailable
{
    use Queueable, SerializesModels;
    
    public $submission;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($submission)
    {
        $this->submission = $submission;
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
                    ->with('body', $this->submission)
                    ->markdown('emails.submissions.sent');
    }
}
