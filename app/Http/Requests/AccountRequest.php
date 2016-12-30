<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'name' => 'bail|required|alpha',
            'first_name' => 'bail|required|alpha',
            'phone' => 'bail|required|alpha_num|digits:10',
            'mobile_phone' => 'bail|required|alpha_num|digits:10',
            'address' => 'bail|required',
            'postal_code' => 'bail|required|alpha_num|digits:5',
            'country' => 'bail|required|alpha_dash',
        ];
    }
}
