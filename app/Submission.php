<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
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
                            'agent_phone_number'
                          
                    ];


    public function currentWeek() {
      /* CALCULATING DATE 7 DAYS FROM TODAY */
      $date = new \DateTime(date("Y-m-d"));
      $date->modify('+7 day');
      return $dateInSevenDays = $date->format('Y-m-d');
      /* END */
    }

    public static  function createFromRequest($request) 
    {
        Submission::create([

          'agent_name' => $request->agent_name,
          'agency_name' => $request->agency_name,
          'agent_email_address' => $request->agent_email_address,
          'agent_phone_number' => $request->agent_phone_number,
          'lob' => $request->lob,
          'effective_date' => $request->effective_date,
          'named_insured' => $request->named_insured,
          'mailing_address_street_name_and_number' => $request->mailing_address_street_name_and_number,
          'mailing_address_city' => $request->mailing_address_city,
          'mailing_address_county' => $request->mailing_address_county,
          'mailing_address_zip'=> $request->lob,
          'mailing_address_state'=> $request->mailing_address_state,
          'location_address_street_name_and_number' => $request->location_address_street_name_and_number,
          'location_address_city' => $request->mailing_address_city,
          'location_address_county' => $request->location_address_county,
          'location_address_zip'=> $request->location_address_zip,
          'location_address_state'=> $request->location_address_state,
          'phone_number' => $request->phone_number,
          'email_address' => $request->email_address,
          'cov_a' => $request->cov_a,
          'other_structures' => $request->other_structures,
          'loss_of_use' => $request->loss_of_use,
          'med_pay' => $request->agent_phone_number,
          'aop_ded' => $request->aop_ded,
          'construction_type' => $request->construction_type,
          'protection_class' => $request->protection_class,
          'new_purchase' => $request->new_purchase,
          'prior_carrier' => $request->prior_carrier,
          'prior_carrier_name' => $request->prior_carrier_name,
          'prior_carrier_effective_date' => $request->prior_carrier_effective_date,
          'status' => 'not_logged',
          'submission_number' => rand(100,555555)
        ]);   
    }
}
