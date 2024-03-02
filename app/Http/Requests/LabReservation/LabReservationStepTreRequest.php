<?php

namespace App\Http\Requests\LabReservation;

use Illuminate\Foundation\Http\FormRequest;

class LabReservationStepTreRequest extends FormRequest
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
        dd($this->all(), $this->session()->all());
        return [
            //
        ];
    }
}
