<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;
use App\Http\Requests\ContactUsRequest;

class ContactsController extends Controller
{
    public function create()
    {
        return view('/contactus/create');
    }

    public function store(ContactUsRequest $request)
    {
        dispatch(new \App\Jobs\SendContactUsEmail($request->input('subject_line'), $request->input('body')));

        return redirect('/');
    }

}
