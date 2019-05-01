<?php

namespace App;

use App\File;
use Illuminate\Database\Eloquent\Model;

class RatingWorksheet extends Model
{
    use Traits\RecordsActivity;
        	
    protected $fillable = [ 
                            'file_id',
                            'premium_id',
                            'rater_id'
        		    		]; 
       		    		

    public function file() {
        return $this->belongsTo(File::class, 'file_id');
    }


}
