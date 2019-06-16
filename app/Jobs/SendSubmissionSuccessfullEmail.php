<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Mail\SubmissionEmailSent;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendSubmissionSuccessfullEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $to;

    public $submission;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($to, $submission)
    {
        $this->to = $to;
        $this->submission = $submission;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        \Mail::to($this->to)->send(new SubmissionEmailSent($this->submission));
    }
}
