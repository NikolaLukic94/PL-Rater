<?php

namespace App\Listeners;

use App\Mail\ApproveNewUser;
use App\Events\NewUserRequiringApproval;

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
