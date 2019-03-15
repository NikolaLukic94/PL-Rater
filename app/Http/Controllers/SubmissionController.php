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
     
    public function index(Request $request)
    {
      if($request->isMethod('post')){
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
    } else {

        return view('subs/search',compact('submission'));

}

