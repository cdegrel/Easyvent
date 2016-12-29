<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'bail|required',
            'address' => 'bail|required',
            'city' => 'bail|required|alpha_dash',
            'postal_code' => 'bail|required|alpha_num|digits:5',
            'country' => 'bail|required|alpha_dash',
            'description' => 'bail|required'
        ];
    }
}
