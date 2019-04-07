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


    public function agingDate() {
        $to = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at);
        $now = Carbon::now();
        return $to->diffInDays($now);
    }


}
