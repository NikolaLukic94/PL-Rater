<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class File extends Model
{
        use Traits\RecordsActivity;

        protected $fillable = [ 'agent_name',
                                'agency_name',
                                'lob',
                                'effective_date',
                                'expiration_date',
                                'named_insured',
                                'mailing_address',
                                'ssn',
                                'entity_type',
                                'named_insured',
                                'additional_ni',
                                'phone_number',
                                'email_address',
                                'cov_a',
                                'other_structures',
                                'loss_of_use',
                                'med_pay',
                                'aop_ded',
                                'construction_type',
                                'protection_class',
                                'new_purchase',
                                'prior_carrier',
                                'prior_carrier_name',
                                'prior_carrier_effective_date',
                                'agent_email_address',
                                'agent_phone_number',
                                'mailing_address_street_name_and_number',
                                'mailing_address_city',
                                'mailing_address_county',
                                'mailing_address_zip',
                                'mailing_address_state',
                                'location_address_street_name_and_number',
                                'location_address_city',
                                'location_address_county',
                                'location_address_zip',
                                'location_address_state',
		             	'status',
        		        'submission_number',
                                'submission_id' ];     

        public function rws(){
        
            return $this->hasMany(RatingWorksheet::class);
        
        }   

        public function submission(){
        
            return $this->belongsTo(Submission::class, 'submission_id');
        
        }       

        public function notes() {
            return $this->hasMany(Note::class)->latest();
        }         

        public static  function createFromRequest($request, $id) 
        {
            $submission = Submission::findOrFail($id); 

            File::create([

              'named_insured' => $request->named_insured,
              'additional_named_insured' => $request->additional_named_insured,
              'type_of_entity' => $request->type_of_entity,
              'ssn' => $request->ssn,
              'mailing_address_street_name_and_number' => $request->mailing_address_street_name_and_number,
              'mailing_address_city' => $request->mailing_address_city,
              'mailing_address_county' => $request->mailing_address_county,
              'mailing_address_state'=> $request->mailing_address_state,
              'mailing_address_zip'=> $request->mailing_address_zip, 
              'location_address_street_name_and_number' => $request->location_address_street_name_and_number,
              'location_address_city' => $request->location_address_city,
              'location_address_county' => $request->location_address_county,
              'location_address_state'=> $request->location_address_state,
              'mailing_address_zip'=> $request->mailing_address_zip, 

              'agent_name' => $submission->agent_name, 
              'agency_name' => $submission->agency_name, 
              'agent_email_address' => $submission->agent_email_address, 
              'agent_phone_number' => $submission->agent_phone_number, 
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
        }                                         
}
