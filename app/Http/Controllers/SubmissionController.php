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

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
/*
  public function __construct()
    
    {
        $this->middleware('auth')->except(['create', 'store']);
    }
*/
    public function indexSubEmail(Request $request) {

      $submission = DB::table('submissions')->orderBy('location_address_state', 'asc')
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

    public function getSubsWithEffDateWithinCurrentMonth() {

      $dt =  Carbon::now();
      $timezone = new DateTimeZone('America/New_York');
      
      $submission = DB::table('submissions')
              ->where($dt->isSameMonth(new \DateTime('effective_date',$timezone)))
              ->orderBy('state', 'asc')
              ->get();             
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchSubEmail()
    {
        return view('subs/search',compact('submission'));
    }
     
    public function searchResultWithSearchMask(Request $request)
    {
      $search_named_insured =    $request->search_named_insured;
      $search_lob =         $request->search_lob;
      $search_effective_date =  $request->search_effective_date;
      $search_agency_name =      $request->search_agency_name;
      $search_agent_name =      $request->search_agent_name;
      $search_state =     Input::get('options');
      $search_from_date =      $request->search_from_date;
      $search_to_date =      $request->search_to_date;

      $submissions = DB::table('submissions')
                  ->when($search_named_insured, function ($query) use ($search_named_insured) {
                      return $query->where('named_insured', 'like', '%' . $search_named_insured . '%');
                  })
                  ->when($search_lob, function ($query) use ($search_lob) {
                      return $query->where('lob', $search_lob);
                  })
                  ->when($search_effective_date, function ($query) use ($search_effective_date) {
                      return $query->where('effective_date', $search_effective_date);
                  })
                  ->when($search_agency_name, function ($query) use ($search_agency_name) {
                     return $query->where('agency_name', $search_agency_name);
                  })
                  ->when($search_agent_name, function ($query) use ($search_agent_name) {
                     return $query->where('agent_name', $search_agent_name);
                  })
                  ->when($search_state, function ($query) use ($search_state) {
                     return $query->where('location_address_state', $search_state);
                  })                           
                  ->when($search_from_date, function ($query) use ($search_from_date) {
                     return $query->where('created_at', $search_from_date);
                  })
                  ->when($search_to_date, function ($query) use ($search_to_date) {
                     return $query->where('created_at', $search_to_date);
                  })
                  ->orderBy('named_insured', 'asc')
                  ->get();                     

                  Session::flash('inputs', [
                      'search_named_insured' => $search_named_insured,
                      'search_lob' => $search_lob,
                      'search_effective_date' => $search_effective_date,
                      'search_agency_name' => $search_agency_name,
                      'search_agent_name' => $search_agent_name,
                      'search_state' => $search_state,
                      'search_from_date' => $search_from_date,                           
                      'search_to_date' => $search_to_date,
                      ]);
                  
        return view('subs/search_with_results',[
          'submissions' => $submissions]);
    }

    public function indexAndSearch()  {

        return view('/subs/indexAndSearch');
    }

    public function createSubEmail()  {


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
    public function storeSubEmail(AgentSendSubmissionEmail $request)  {

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
    public function showSubEmail($id)
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
    public function editSubEmail($id)  {

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
    public function updateSubEmail(Request $request, $id)  {

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

        return redirect('/subs/index');
        
    }
    public function prepemail()  {

        $submission = DB::table('submissions')->get();

        return view('/functionalities/create_email',compact('submission'));
    }
    
    public function sendemail(Request $request) {

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
    }

    public function toPdf(Request $request) {

        $dompdf = new Dompdf();
        $dompdf->loadHtml('/subs/index');
        $dompdf->stream();

    }

}

