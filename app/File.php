<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
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
        		    			'submission_number' ];       
}
