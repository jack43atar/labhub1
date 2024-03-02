<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'type'      => ['required', Rule::in([2,3])],
            'email'     => 'required|email',
            'password'  => 'required',
        ];
    }
}
