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

    public static function getRwJoinPremiumFileRater()
    {
        $rw = DB::table('rating_worksheets')
                ->leftJoin('premiums', 'rating_worksheets.premium_id', '=', 'premiums.id')   
                ->leftJoin('files', 'rating_worksheets.file_id', '=', 'files.id')                      
                ->leftJoin('raters', 'rating_worksheets.rater_id', '=', 'raters.id')
                    ->select('premiums.grand_premium as grand_premium',
                             'premiums.surplus_lines_tax_fee as sl_tax_fee',
                             'premiums.empa as empa',
                             'premiums.created_at as date_created',
                             'files.lob as lob',
                             'files.effective_date as effective_date',
                             'files.named_insured as named_insured',
                             'files.cov_a as cov_a_value',
                             'files.other_structures as other_structures_value',
                             'files.loss_of_use as loss_of_use_value',
                             'files.med_pay as med_pay_value',
                             'files.aop_ded as aop_ded_value',
                             'files.construction_type as construction_type_info',
                             'files.protection_class as protection_class_info',
                             'files.new_purchase as new_purchase_info',
                             'files.prior_carrier as prior_carrier_info',
                             'files.zero_two_losses as zero_two_losses_info',
                             'files.more_than_two_losses as more_than_two_losses_info',
                             'raters.cov_a as cov_a_rate',
                             'raters.other_structures as os_rate',
                             'raters.loss_of_use as loss_of_use_rate',
                             'raters.med_pay as med_pay_rate',
                             'raters.aop_ded as aop_ded_rate',
                             'raters.construction_type as construction_type_rate',
                             'raters.protection_class as pc_rate',
                             'raters.new_purchase as new_purchase_rate',
                             'raters.prior_carrier as prior_carrier_rate',
                             'raters.zero_two_losses as zero_two_losses_rate',
                             'raters.more_than_two_losses as more_than_two_losses_rate'
                    )
                ->first();

        return $rw;                
    }
}
