<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
        protected $fillable = [ 'agent_name',
                                'agency_name',
                                'type_of_coverage',
                                'lob',
                                'effective_date',
                                'named_insured',
                                'mailing_address',
                                'street_name_and_number',
                                'city',
                                'county',
                                'state',
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
                                'agent_phone_number'];

        public $rules = [
        	//agent info
      'agent_name' => 'required|max:100',
      'agency_name' => 'required|max:100',
      'agent_email_address' =>'required|max:50',
      'agent_phone_number'=>'required|max:20',
        	//coverage info
      'effective_date' => 'max:50|nullable',      
      'type_of_coverage' => 'max:50|nullable',
      'lob' => 'required|max:50',
      'named_insured' => 'required|max:100',
      'mailing_address' => 'sometimes|max:150|nullable',
   		'street_name_and_number' => 'required|max:150',
      'city' => 'required|max:150',
      'county' => 'required|max:150',  
      'state' => 'required|max:150',           
   		'phone_number' => 'sometimes|max:20|min:8',//if not provided, will use agents
   		'email_address' => 'sometimes|max:50',//if not provided, will use agents
            //building info
   		'cov_a' => 'required|max:10',
   		'other_structures' => 'required|max:10',
   		'loss_of_use' => 'required|max:10',
   		'med_pay' => 'required|max:10',
   		'aop_ded' => 'required|max:10',
   		'construction_type' => 'required|max:10',
   		'protection_class' => 'required|max:10',
   		'new_purchase' => 'required|nullable|max:10',
   		'prior_carrier' => 'sometimes|nullable|max:50',
    	'prior_carrier_name' => 'required|max:20|min:3',
    	'prior_carrier_effective_date' => 'somethimes|date|nullable',



    ];
}
