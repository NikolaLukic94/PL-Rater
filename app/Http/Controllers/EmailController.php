<?php

namespace App\Http\Controllers;

use App\Submission;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function create()
    {
        return view('/functionalities/create_email', [
            'submission' => Submission::all(),
        ]);
    }

    public function store(Request $request)
    {
        dispatch(new \App\Jobs\SendCustomEmail($request->input('subject_line'), $request->input('body'), $request->input('to')));

        return redirect('/home');
    }
}
