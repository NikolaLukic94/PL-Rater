<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;
use App\Http\Requests\ContactUsRequest;

class ContactUsController extends Controller
{
    public function create()
    {
        return view('/contactus/create');
    }

    public function store(ContactUsRequest $request)
    {
        $subject = $request->input('subject_line');
        $body = $request->input('body');

        dispatch(new \App\Jobs\SendContactUsEmail($subject,$body));

        return redirect('/');
    }

}
