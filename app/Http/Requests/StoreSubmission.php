<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubmission extends FormRequest
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
        'agent_name' => 'required|max:100',
        'agency_name' => 'required|max:100',
        'agent_email_address' => 'required|email|max:50',
        'agent_phone_number' => 'required|max:13',
            //insured's info
        'lob' => 'required',
        'effective_date' => 'required|date',
        'named_insured' => 'max:100',
        'street_name_and_number' => 'required',
        'city' => 'required',
        'county' => 'required',
        'state' => 'required',
            //risk rating characteristics
        'cov_a' => 'required|numeric',
        'other_structures' => 'required|numeric',
        'loss_of_use' => 'required|numeric',
        'med_pay' => 'required|numeric',
        'construction_type' => 'required',
        'protection_class' => 'required|numeric',
        ];
    }
}
