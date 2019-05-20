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
use App\Jobs\SendSubmissionSuccessfullEmail;

class SubmissionEmailController extends Controller
{
    public function index() {

      $dateInSevenDays = $this->currentWeek();

      return view('/subs/index', [
            'submission' => Submission::orderBy('location_address_state', 'asc')->paginate(10),
            'subsEffWithinNextWeek' => DB::table('submissions')
                                    ->where('effective_date', '<', $dateInSevenDays )
                                    ->count()
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

    public function store(AgentSendSubmissionEmail $request)  {

        $submission = Submission::createFromRequest($request);

        $to = $request->agent_email_address;           
        $submission_number = $submission->submission_number;

        dispatch(new \App\Jobs\SendSubmissionSuccessfullEmail($to, $submission_number));

        return view('/subs/success');
    }

    public function show($id)
    {
        return view('/subs/show', [
            'submission' => Submission::findOrFail($id)
        ]);    
    }
    
    public function edit($id)  {

        return view('/subs/edit', [
          'submission' => Submission::findOrFail($id),
          'state' => $this->state,
          'lob' => $this->lob,
          'med_pay' => $this->med_pay,
          'aop' => $this->aop,
          'constr_type' => $this->constr_type,
          'pc' => $this->pc,
          'yes_no' => $this->yes_no          
        ]);
    }

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

        return view('subs/change/success');
    }

    public function destroy($id) {

        $submission = Submission::find($id);
        
        $submission->delete();

        return redirect('/subs/emails/index');
    }
}
