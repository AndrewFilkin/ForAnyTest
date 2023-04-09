<?php

namespace App\Http\Requests\Email;

use Illuminate\Foundation\Http\FormRequest;

class MeilSendValidationRequest extends FormRequest
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


    public function rules()
    {
        return [
            'title' => 'required|max:255|min:3',
            'info' => 'required|max:255|min:3',
        ];
    }
}
