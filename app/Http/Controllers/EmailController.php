<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Email;
use App\Mail\CustomEmail;
use App\Mail\SubmissionEmailSent; 
use App\Mail\ContactAgentEmail;
use Carbon\Carbon;
use App\User;
use App\Submission;
use Illuminate\Support\Facades\Input;
use App\LogActivity;
use App\Http\Requests\SendEmailRequest;
use App\Jobs\SendCustomEmail;

class EmailController extends Controller
{
    public function create()  
    {
        return view('/functionalities/create_email',[
            'submission' => Submission::all()
        ]);
    }

    public function store(Request $request) 
    {
        $properties = Email::getCustomEmailProperties($request);

        dispatch(new \App\Jobs\SendCustomEmail($properties['subject'], $properties['body'], $properties['to']));

        return redirect('/home');
    }

}
