<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'email' => 'required|string|email|max:255|unique:users',
            'first_name'=>'required',
            'last_name'=>'required',
            'date_of_birth'=>'required',
           // 'medicaid_id'=>'required',
            'telephone_number'=>'required',
            'permanent_address'=>'required',
            'state'=>'required',
            'country'=>'required',
            'zip_code'=>'required',
//            'managed_medicaid_health_plan'=>'required',
//            'managed_MLTC_plan'=>'required',
        ];
    }
}
