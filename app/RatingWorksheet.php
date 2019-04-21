<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RatingWorksheet extends Model
{
        use Traits\RecordsActivity;
        	
        protected $fillable = [ 
                                'file_id',
                                'premium_id',
                                'rater_id'
        		    		]; 
}
