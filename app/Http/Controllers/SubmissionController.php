<?php

namespace App\Http\Controllers;

use App\Submission;
use Illuminate\Http\Request;


class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/subs/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subs/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $submission = new Submission;

        Submission::create([

            //add validation here
            $request->validate([
            'title' => 'required|unique:posts|max:255',
            'author.name' => 'required',
            'author.description' => 'required',

            'agent_name' => 'required',
            'agency_name' => 'required',
            'type_of_coverage' => 'required',
            'lob' => 'required',
            'named_insured' => 'required',
            'mailing_address' => 'nullable',
            'location_address' =>  'required',
            'phone_number' => 'required',
            'email_address' => 'required',
            'cov_a' => 'required', 
            'other_structures' => 'required', 
            'loss_of_use' => 'required',                                  
            'med_pay' => 'required',   
            'aop_ded' => 'required',   
            'construction_type' => 'required',    
            'protection_class' => 'required', 
            'new_purchase' => 'required', 
            'prior_carrier' => 'required',  
            'prior_carrier_name' => 'required',    
            'prior_carrier_effective_date' => 'required'  
            ]);

            https://laravel.com/docs/5.7/validation

            'agent_name' => request('agent_name'),
            'agency_name' => request('agency_name'),
            'type_of_coverage' => request('type_of_coverage'),
            'lob' => request('lob'),
            'named_insured' => request('named_insured'),
            'mailing_address' => request('mailing_address'),
            'location_address' =>  request('location_address'),
            'phone_number' => request('phone_number'),
            'email_address' => request('email_address'),
            'cov_a' => request('cov_a'), 
            'other_structures' => request('other_structures'), 
            'loss_of_use' => request('loss_of_use'),                                  
            'med_pay' => request('med_pay'),   
            'aop_ded' => request('aop_ded'),   
            'construction_type' => request('construction_type'),    
            'protection_class' => request('protection_class'), 
            'new_purchase' => request('new_purchase'), 
            'prior_carrier' => request('prior_carrier'),  
            'prior_carrier_name' => request('prior_carrier_name'),    
            'prior_carrier_effective_date' => request('prior_carrier_effective_date')                    
        ]);

        $candidate->save();

        return view('/candidates/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function show(Submission $submission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function edit(Submission $submission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submission $submission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submission $submission)
    {
        //
    }
}
