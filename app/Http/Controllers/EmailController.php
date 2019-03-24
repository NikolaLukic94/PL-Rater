<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Mail;
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

    public function create()  {

        $submission = DB::table('submissions')->get();

        return view('/functionalities/create_email',compact('submission'));
    }

    public function store(Request $request) {

        $subject = $request->input('subject_line');
        $body = $request->input('body');
        $to = $request->input('to');
  
      // \Mail::to($request->to)->send(new CustomEmail($subject,$body));

        dispatch(new \App\Jobs\SendCustomEmail($subject,$body,$to));

        LogActivity::addToLog('contacted agent '. $request->to);

        return redirect('/home');
    }

}
