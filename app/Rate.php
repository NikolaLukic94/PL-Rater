<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use Traits\RecordsActivity;

    protected $fillable = ['lob',
                                'cov_a',
                                'other_structures',
                                'loss_of_use',
                                'med_pay_1k',
                                'med_pay_2_5k',
                                'med_pay_5k',
                                'aop_ded_1',
                                'aop_ded_2',
                                'aop_ded_3',
                                'aop_ded_4',
                                'aop_ded_5',
                                //construction types
                                'frame',
                                'jm',
                                'bv',
                                'masonry',
                                //
                                'protection_class_1',
                                'protection_class_2',
                                'protection_class_3',
                                'protection_class_4',
                                'protection_class_5',
                                'new_purchase',
                                'prior_carrier',
                                'prior_carrier_name',
                                'zero_two_losses',
                                'more_than_two_losses',

                            ];

    public static function createFromRequest($request)
    {
        self::create([
                'lob' =>  $request->lob,
                'county' => $request->county,
                'state'=> $request->state,
                'cov_a' => $request->cov_a,
                'other_structures' => $request->other_structures,
                'loss_of_use' => $request->loss_of_use,
                'med_pay_1k' => $request->med_pay_1000,
                'med_pay_2_5k' => $request->med_pay_2_5k,
                'med_pay_5k' => $request->med_pay_5000,
                'aop_ded_1' => $request->aop_ded_1,
                'aop_ded_2' => $request->aop_ded_2,
                'aop_ded_3' => $request->aop_ded_3,
                'aop_ded_4' => $request->aop_ded_4,
                'aop_ded_5' => $request->aop_ded_5,                               
                'construction_type' => $request->construction_type,
                'protection_class_1' => $request->protection_class_1,
                'protection_class_2' => $request->protection_class_2,
                'protection_class_3' => $request->protection_class_3,
                'protection_class_4' => $request->protection_class_4, 
                'protection_class_5' => $request->protection_class_5,                                                                              
                'new_purchase' => $request->new_purchase,
                'prior_carrier' => $request->prior_carrier,
                'prior_carrier_name' => $request->prior_carrier_name,
                'prior_carrier_effective_date' => $request->prior_carrier_effective_date,
                'frame' => $request->frame,
                'jv' => $request->jv,
                'bv' => $request->bv,
                'masonry' => $request->masonry,
                'zero_two_losses' => $request->zero_two_losses,
                'more_than_two_losses' => $request->more_than_two_losses
            ]);
    }
}
