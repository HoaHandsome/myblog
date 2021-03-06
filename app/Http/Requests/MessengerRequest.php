<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessengerRequest extends FormRequest
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
            'name'=>'required|max:255|min:3',
            'mail'=>'required|email',
            'phone'=>'required',
            'subject'=>'required|min:5',
            'messenger'=>'required|min:5',
        ];
    }
}
