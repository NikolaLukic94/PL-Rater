<?php

namespace App\Http\Controllers;

use Validator;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Mail\SubmissionSubmitted;
use Illuminate\Support\Facades\DB;
use App\Mail;
use App\Mail\SubmissionEmailSent; 
use App\Mail\ContactAgentEmail;
use Carbon\Carbon;
use App\User;
use App\Submission;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\AgentSendSubmissionEmail;
use App\LogActivity;

class SubmissionEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {

      $submission = Submission::orderBy('location_address_state', 'asc')
                                    ->get();

      /* CALCULATING DATE 7 DAYS FROM TODAY */
      $date = new \DateTime(date("Y-m-d"));
      $date->modify('+7 day');
      $dateInSevenDays = $date->format('Y-m-d');
      /* END */

      /* GET SUBMISSIONS WITH EFF DATE NO LATER THAN 7 DAYS FROM TODAY */
      $subsEffWithinNextWeek = DB::table('submissions')
                                    ->where('effective_date','<',$dateInSevenDays )
                                    ->count();                                
      /* END */



      return view('/subs/index', [
            'submission' => $submission,
            'subsEffWithinNextWeek' => $subsEffWithinNextWeek
      ]);

    }

    public function create()  {

        return view('subs/create',[
          'state' => $this->state,
          'lob' => $this->lob,
          'med_pay' => $this->med_pay,
          'aop' => $this->aop,
          'constr_type' => $this->constr_type,
          'pc' => $this->pc,
          'yes_no' => $this->yes_no
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgentSendSubmissionEmail $request)  {

        Submission::create([

        'agent_name' => request('agent_name'),
        'agency_name' => request('agency_name'),
        'agent_email_address' => request('agent_email_address'),
        'agent_phone_number' => request('agent_phone_number'),
        'lob' => request('lob'),
        'effective_date' => request('effective_date'),
        'named_insured' =>  request('named_insured'),
        'mailing_address_street_name_and_number' => request('mailing_address_street_name_and_number'),
        'mailing_address_city' => request('mailing_address_city'),
        'mailing_address_county' => request('mailing_address_county'),
        'mailing_address_zip'=>request('mailing_address_zip'),
        'mailing_address_state'=>request('mailing_address_state'),
        'location_address_street_name_and_number' => request('location_address_street_name_and_number'),
        'location_address_city' => request('mailing_address_city'),
        'location_address_county' => request('location_address_county'),
        'location_address_zip'=>request('location_address_zip'),
        'location_address_state'=>request('location_address_state'),
        'phone_number' => request('phone_number'),
        'email_address' => request('email_address'),
        'cov_a' => request('cov_a'),    
        'other_structures' => request('other_structures'),
        'loss_of_use' => request('loss_of_use'),
        'med_pay' => request('agent_phone_number'),
        'aop_ded' => request('aop_ded'),
        'construction_type' => request('construction_type'),
        'protection_class' => request('protection_class'),
        'new_purchase' => request('new_purchase'),    
        'prior_carrier' => request('prior_carrier'),
        'prior_carrier_name' => request('prior_carrier_name'),
        'prior_carrier_effective_date' => request('prior_carrier_effective_date'),
        'status' => 'not_logged',
        'submission_number' => rand(10,555555)
                  ]);   
                                                                                                   
        \Mail::to($request->agent_email_address)->send(new SubmissionEmailSent);
        LogActivity::addToLog('created Submission' . request('named_insured'));
        return view('/subs/success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $submission = Submission::findOrFail($id);

        return view('/subs/show', [
            'submission' => $submission
        ]);
    
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)  {

        $submission = Submission::findOrFail($id);

        return view('/subs/edit', [
          'submission' => $submission,
          'state' => $this->state,
          'lob' => $this->lob,
          'med_pay' => $this->med_pay,
          'aop' => $this->aop,
          'constr_type' => $this->constr_type,
          'pc' => $this->pc,
          'yes_no' => $this->yes_no          
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)  {

        $submission = Submission::findOrFail($id);

        $submission->agent_name =    $request->agent_name;
        $submission->agency_name =     $request->agency_name;   
        $submission->agent_email_address =  $request->agent_email_address;
        $submission->type_of_coverage =      $request->type_of_coverage;
        $submission->lob =      $request->lob;
        $submission->effective_date =      $request->effective_date;
        $submission->named_insured =      $request->named_insured;
        $submission->mailing_address =      $request->mailing_address;
        $submission->street_name_and_number =      $request->street_name_and_number; 
        $submission->city =      $request->city;       
        $submission->county =      $request->county;       
        $submission->state =      $request->state;       
        $submission->phone_number =      $request->phone_number;  
        $submission->cov_a =      $request->cov_a; 
        $submission->other_structures =      $request->other_structures;  
        $submission->loss_of_use =      $request->loss_of_use;   
        $submission->med_pay =      $request->med_pay; 
        $submission->aop_ded =      $request->aop_ded; 
        $submission->construction_type =      $request->construction_type; 
        $submission->protection_class =      $request->protection_class; 
        $submission->new_purchase =      $request->new_purchase; 
        $submission->prior_carrier =      $request->prior_carrier; 
        $submission->prior_carrier_name =      $request->prior_carrier_name; 
        $submission->prior_carrier_effective_date =      $request->prior_carrier_effective_date; 

        $submission->save();        

        LogActivity::addToLog('updated submission id# '. $id);
        return view('subs/change/success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */

    public function destroy($id) {

        $submission = Submission::find($id);

        LogActivity::addToLog('deleted submission id ' . $id . $submission->named_insured );
        
        $submission->delete();

        return redirect('/subs/emails/index');
        
    }
}
