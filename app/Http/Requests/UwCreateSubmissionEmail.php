<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UwCreateSubmissionEmail extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false; // true?
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'agency_name' => 'required|max:100',
        'agent_email_address' => 'required|email|max:50',
        'agent_phone_number' => 'required',

        'type_of_coverage' => 'required',
        'lob' => 'required',
        'named_insured' => 'required|max:100',
        'street_name_and_number' => 'required',
        'city' => 'required',
        'county' => 'required',
        'state' => 'required',

        'cov_a' => 'required|nullable',
        'other_structures' => 'nullable',
        'loss_of_use' => 'nullable',
        'med_pay' => 'nullable',
        'protection_class' => 'nulable',
        'construction_type' => 'required',
        'new_purchase' =>'somethimes|nullable',
        'prior_carrier' =>'somethimes|nullable',
        'prior_carrier_name' =>'somethimes|nullable',
        'prior_carrier_effective_date' =>'somethimes|nullable',
        ];
    }
}
