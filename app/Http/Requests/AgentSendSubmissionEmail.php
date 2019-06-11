<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentSendSubmissionEmail extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //true?
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //agency info
        'agency_name' => 'required|max:100',
        'agent_email_address' => 'required|email|max:50',
        'agent_phone_number' => 'required',
            //insured's info
        'lob' => 'required',
        'named_insured' => 'max:100',
        'street_name_and_number' => 'required',
        'city' => 'required',
        'county' => 'required',
        'state' => 'required',
            //risk rating characteristics
        'cov_a' => 'required',
        'construction_type' => 'required',
        ];
    }
}
