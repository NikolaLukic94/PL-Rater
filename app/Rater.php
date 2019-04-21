<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rater extends Model
{
        use Traits\RecordsActivity;

        protected $fillable = [ 
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
                                'location_address_state',
                                'file_id'
        		    		]; 
}
