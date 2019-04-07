<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\File;
use App\Form;
use App\LogActivity;

class QuoteController extends Controller
{
    public function create() {

    	$file = DB::table('files')->where('id',1)->first();

    	$rw = DB::table('rating_worksheets')->where('id',1)->first();

    	return view('/quoting/create',[
    		'file' => $file,
    		'rw' => $rw,
    		'forms' => Form::all()
    	]);

    }

    public function store() {

    	$file = File::findOrFail($id); 

        Quote::create([

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

          'agent_name' => $file->agent_name,
          'agency_name' => $file->agency_name,
          'agent_email_address' => $file->agent_email_address,
          'agent_phone_number' => $file->agent_phone_number,
          'agent_name' => $file->agent_name,
          'agent_name' => $file->agent_name,                      

          'lob' => $file->lob,
          'effective_date' => $file->effective_date,
          // need set to have either req for input or info from subs
          'expiration_date' => Input::get('expiration_date'),
          'agent_phone_number' => $file->agent_phone_number,
          'agent_name' => $file->agent_name,
          'agent_name' => $file->agent_name,  
                                         
          'phone_number' => $file->phone_number, 
          'email_address' => $file->email_address,                                                     
                        
              //building info
          'cov_a' => $file->cov_a,  
          'other_structures' => $file->other_structures,  
          'loss_of_use' => $file->loss_of_use,  
          'med_pay' => $file->med_pay,  
          'aop_ded' => $file->aop_ded,  
          'construction_type' => $file->construction_type,  
          'protection_class' => $file->protection_class,  
          'new_purchase' => $file->new_purchase,  
          'email_address' => $file->email_address,    
          'prior_carrier' => $file->prior_carrier,                 
          'prior_carrier_name' => $file->prior_carrier_name,                 
          'prior_carrier_effective_date' => $file->prior_carrier_effective_date,                                                            
          'status' => 'quoted',    
              //additional coverage
          'mold' => $file->mold,
          'mold_limit' => $file->mold_limit,
          'water_back_up' => $file->water_back_up,
          'water_back_up_limit' => $file->water_back_up_limit
                  ]);   

  //      $file->save();
        LogActivity::addToLog('created file' . $file->id . $file->named_insured);  

        return redirect('/file/index');
    }
}
