<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreRate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'lob' => 'required|max:50',
            'cov_a' => 'required',
                //insured's info
            'other_structures' => 'required',
            'loss_of_use' => 'max:100',
            'med_pay_1k' => 'required',
            'med_pay_2_5k' => 'required',
            'med_pay_5k' => 'required',
            'aop_ded_1' => 'required',
            'aop_ded_2' => 'required',
            'aop_ded_3' => 'required',
            'aop_ded_4' => 'required',
            'aop_ded_5' => 'required',
            'frame' => 'required',
            'jm' => 'required',
            'bv' => 'required',
            'masonry' => 'required',
            'protection_class_1' => 'required',
            'protection_class_2' => 'required',
            'protection_class_3' => 'required',
            'protection_class_4' => 'required',
            'protection_class_5' => 'required',
            'new_purchase' => 'required',
            'prior_carrier' => 'required',
            'prior_carrier_name' => 'required',
            'zero_two_losses' => 'required',
            'more_than_two_losses' => 'required',        
        ];
    }
}
