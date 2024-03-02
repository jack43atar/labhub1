<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if (isset($this->type)) {
            if ($this->type == User::TYPES['business']) {
                return [
                    'company_name'  => 'required|string|max:255',
                    'contact_name'  => 'required|string|max:255',
                    'role'          => 'required|string|max:255',
                    'type'          => ['required', Rule::in([2,3])],
                    'email'         => 'required|string|email|max:255|unique:users',
                    'password'      => 'required|min:8|max:20|confirmed',
                ];
            }
            elseif ($this->type == User::TYPES['user']) {
                return [
                    'name'      => 'required|string|max:255',
                    'type'      => ['required', Rule::in([2,3])],
                    'email'     => 'required|string|email|max:255|unique:users',
                    'password'  => 'required|min:8|max:20|confirmed',
                ];
            }
        }
    }
}
