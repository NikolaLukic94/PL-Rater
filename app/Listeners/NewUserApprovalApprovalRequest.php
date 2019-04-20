<?php

namespace App\Listeners;

use App\Events\NewUserRequiringApproval;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use Mail;
use App\Mail\ApproveNewUser;

class NewUserApprovalApprovalRequest
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewUserRequiringApproval  $event
     * @return void
     */
    public function handle(NewUserRequiringApproval $event)
    {
        \Mail::to('admin@admin.com')->send(new ApproveNewUser($event->user));
    }
}
