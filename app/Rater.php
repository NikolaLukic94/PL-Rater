<?php

namespace App;

use App\Rater;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Rater extends Model
{
        use Traits\RecordsActivity;
        
        public $table = 'raters';

        protected $fillable = [ 'lob',
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
