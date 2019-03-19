<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Mail;
use App\Mail\SubmissionEmailSent; 
use App\Mail\ContactAgentEmail;
use Carbon\Carbon;
use App\User;
use App\Submission;
use Illuminate\Support\Facades\Input;
use App\LogActivity;
use App\Http\Requests\SendEmailRequest;

class EmailController extends Controller
{

    public function create()  {

        $submission = DB::table('submissions')->get();

        return view('/functionalities/create_email',compact('submission'));
    }

    public function store(SendEmailRequest $request) {

        $content = array('');

        $subject_line = $request->input('subject_line');
        $body = $request->input('body');
        $to = $request->input('to');
  
        $content = [
            'title'=> $request->subject_line, 
            'body'=> $request->body,
            'to'=>$request->to
            ];

        \Mail::send('emails.subs.cetest', ['content' => $content], function ($message) use ($content,$to) {
            $message->from('support@quotedept.com', 'Your Submission');
            $message->to($to)->subject('Welcome to laravel');
        });
        LogActivity::addToLog('contacted agent '. $request->to);

        return redirect('/home');
    }

}
