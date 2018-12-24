<?php

namespace App\Http\Controllers;

use Validator;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Mail\SubmissionSubmitted;
use Illuminate\Support\Facades\DB;
use App\Mail;
use App\Mail\ContactAgentEmail;
use Carbon\Carbon;
use App\User;

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
    public function index(Request $request) {

/*
        if($request->isMethod('post')){
            $search_lob =    $request->search_lob;
            $search_agency_name =     $request->search_agency_name;
            $search_type_of_coverage =         $request->search_type_of_coverage;
            $search_effective_date =  $request->search_effective_date;
            $search_state =      $request->search_state;

            $submissions = DB::table('submissions')
                        ->when($search_lob, function ($query) use ($search_lob) {
                            return $query->where('lob', 'like', '%' . $search_lob . '%');
                        })
                        ->when($search_agency_name, function ($query) use ($search_agency_name) {
                            return $query->where('agency_name', 'like', '%' . $search_agency_name . '%');
                        })
                        ->when($search_type_of_coverage, function ($query) use ($search_type_of_coverage) {
                            return $query->where('type_of_coverage', $search_type_of_coverage);
                        })
                        ->when($search_effective_date, function ($query) use ($search_effective_date) {
                            return $query->where('effective_date', $search_effective_date);
                        })
                        ->when($search_state, function ($query) use ($search_state) {
                           return $query->where('state', $search_state);
                        })
                        ->orderBy('named_insured', 'asc')
                        ->orderBy('state', 'asc')
                        ->get();

                     

                  Session::flash('inputs', [
                           'search_lob' => $search_lob,
                            'search_agency_name' => $search_agency_name,
                            'search_type_of_coverage' => $search_type_of_coverage,
                            'search_effective_date' => $search_effective_date,
                            'search_state' => $search_state
                            ]);
                    }else{
                         Session::forget('inputs');


            $submissions = Submission::orderBy('named_insured', 'asc')
                            ->orderBy('state', 'asc')
                            ->get();
                        }


            return view('/subs/index', [
                'submissions' => $submissions
            ]);*/
    $submission = DB::table('submissions')->orderBy('state', 'asc')
                                          ->get();

    return view('/subs/index', [
            'submission' => $submission
        ]);

    } 


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        return view('subs/search');
    }
     
    public function indexAndSearch()
    {
        return view('/subs/indexAndSearch');
    }

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

            'agent_name' => request('agent_name'),
            'agency_name' => request('agency_name'),
            'agent_email_address' => request('agent_email_address'),
            'agent_phone_number' => request('agent_phone_number'),
            'type_of_coverage' => request('type_of_coverage'),
            'lob' => request('lob'),
            'effective_date' => request('effective_date'),
            'named_insured' =>  request('named_insured'),
            'mailing_address' => request('mailing_address'),

            'street_name_and_number' => request('street_name_and_number'),
            'city' => request('city'),
            'county' => request('county'),
            'state'=>request('state'),
             
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
            'prior_carrier_effective_date' => request('prior_carrier_effective_date')
                      ]);                                                                                    

            $submission->save();

            return view('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function show(Submission $submission)
    {

    $submission = DB::table('submissions')->get();

        return view('/subs/list', [
            'submission' => $submission
        ]);
    
    }
    



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function edit(Submission $submission)
    {
        $submission = Submission::findOrFail($id);

        return view('/subs/edit', compact('submission'));
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

        return view('subs/change/success');
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

    public function prepemail()
    {

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


    }

    public function toPdf(Request $request) {

      $dompdf = new Dompdf();
      $dompdf->loadHtml('/subs/index');
      $dompdf->stream();

    }

}


/*

            $something = DB::table('hr_users')
                        ->join('users', 'users.hr_user_id', '=', 'users.id')
                        ->select('hr_users.name', 'users.id', 'hr_users.id')
                        ->get();

                        */