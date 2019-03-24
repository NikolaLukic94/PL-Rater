<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\CustomEmail;

class SendCustomEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $to;
    public $subject;
    public $body;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($subject,$body,$to)
    {
        $this->subject = $subject;  
        $this->body = $body;   
        $this->to = $to; 
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       \Mail::to($this->to)->send(new CustomEmail($this->subject,$this->body));
    }
}
