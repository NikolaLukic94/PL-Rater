<?php

namespace App\Http\Controllers;

use App\File;
use App\Submission;
use App\RatingWorksheet;
use App\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Mail\SubmissionSubmitted;
use App\LogActivity;


class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

              $files = DB::table('files')
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
                             return $query->where('state', $search_state);
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
                          
              return view('/file/index',[
                'files' => $files
              ]);

      } else {
              
              return view('/file/search',[
                'files' => File::all()
              ]);
        }
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $submission = Submission::findOrFail($id); 

        return view('file/create', [
          'submission' => $submission,
          'state' => $this->state,
          'type_of_entity' => $this->type_of_entity
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {

        $submission = Submission::findOrFail($id); 

        File::create([

          'named_insured' =>  request('named_insured'),
          'additional_named_insured' =>  request('additional_named_insured'),
          'type_of_entity' =>  request('type_of_entity'),
          'ssn' => request('ssn'),
          'mailing_address_street_name_and_number' => request('mailing_address_street_name_and_number'),
          'mailing_address_city' => request('mailing_address_city'),
          'mailing_address_county' => request('mailing_address_county'),
          'mailing_address_state'=>request('mailing_address_state'),
          'mailing_address_zip'=>request('mailing_address_zip'),                           
          'location_address_street_name_and_number' => request('location_address_street_name_and_number'),
          'location_address_city' => request('location_address_city'),
          'location_address_county' => request('location_address_county'),
          'location_address_state'=>request('location_address_state'),
          'mailing_address_zip'=>request('mailing_address_zip'),            

          'agent_name' => $submission->agent_name,
          'agency_name' => $submission->agency_name,
          'agent_email_address' => $submission->agent_email_address,
          'agent_phone_number' => $submission->agent_phone_number,
          'agent_name' => $submission->agent_name,
          'agent_name' => $submission->agent_name,                      

          'lob' => $submission->lob,
          'effective_date' => $submission->effective_date,
          // need set to have either req for input or info from subs
          'expiration_date' => Input::get('expiration_date'),
          'agent_phone_number' => $submission->agent_phone_number,
          'agent_name' => $submission->agent_name,
          'agent_name' => $submission->agent_name,  
                                         
          'phone_number' => $submission->phone_number, 
          'email_address' => $submission->email_address,                                                     
                        
              //building info
          'cov_a' => $submission->cov_a,  
          'other_structures' => $submission->other_structures,  
          'loss_of_use' => $submission->loss_of_use,  
          'med_pay' => $submission->med_pay,  
          'aop_ded' => $submission->aop_ded,  
          'construction_type' => $submission->construction_type,  
          'protection_class' => $submission->protection_class,  
          'new_purchase' => $submission->new_purchase,  
          'email_address' => $submission->email_address,    
          'prior_carrier' => $submission->prior_carrier,                 
          'prior_carrier_name' => $submission->prior_carrier_name,                 
          'prior_carrier_effective_date' => $submission->prior_carrier_effective_date,                                                            
          'status' => 'file',    
          'submission_number' => $submission->submission_number,    
          'submission_id' => $submission->id,
              //additional coverage
          'mold' => $submission->mold,
          'mold_limit' => $submission->mold_limit,
          'water_back_up' => $submission->water_back_up,
          'water_back_up_limit' => $submission->water_back_up_limit
                  ]);   

          $submission->status = 'logged';

        return redirect('/file/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file = File::findOrFail($id);
        $rw = RatingWorksheet::where('file_id',$id);
        $submission = Submission::where('id',$file->submission_id)->first();

        $rw = DB::table('rating_worksheets')
                  ->leftJoin('files', 'rating_worksheets.file_id', '=', 'files.id')   
                  ->leftJoin('raters', 'rating_worksheets.rater_id', '=', 'raters.id')    
                  ->leftJoin('premiums', 'rating_worksheets.premium_id', '=', 'premiums.id')                
                  ->select('rating_worksheets.id as rw_id',
                           'rating_worksheets.created_at as rw_created_at',
                           'files.lob as file_lob',
                           'files.effective_date as files_effective_date',
                           'files.expiration_date as files_expiration_date',
                           'files.named_insured as named_insured',
                           'files.cov_a as file_cov_a',
                           'files.other_structures as file_os',
                           'files.loss_of_use as file_lou',
                           'files.med_pay as file_med_pay',
                           'files.aop_ded as file_aop',
                           'files.construction_type as file_construction_type',
                           'files.protection_class as file_pc',
                           'files.new_purchase as file_new_purchase',
                           'files.prior_carrier as file_prior_carrier',
                           'files.zero_two_losses as file_losses',
                           'files.more_than_two_losses as file_more_than_two_losses',
                           'premiums.grand_premium as grand_premim',
                           'premiums.surplus_lines_tax_fee as sl_tax_fee',
                           'premiums.empa as empa_fee',
                           'raters.cov_a as cov_a_rate',
                           'raters.other_structures as os_rate',
                           'raters.loss_of_use as loss_of_use_rate',
                           'raters.med_pay as med_pay_rate',
                           'raters.aop_ded as aop_rate',
                           'raters.construction_type as construction_type_rate',
                           'raters.protection_class as pc_rate',
                           'raters.new_purchase as new_purchase_rate',
                           'raters.more_than_two_losses as more_than_two_losses_rate',
                           'raters.prior_carrier as prior_carrier_rate'
                           )
                  ->orderBy('rating_worksheets.id')
                  ->get();

        return view('/file/index',[
            'file' => $file,
            'rw' => $rw,
            'notes' => Notes::all(),
            'submission' => $submission
        ]);
    }
    
    public function destroy($id) {

        $file = File::find($id);

        $file->delete();

        return redirect('/');
        
    }


}
