<?php

namespace App\Http\Requests\LabReservation;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class labReservationAllFormWithPaymentRequest extends FormRequest
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
            'stripeToken'               => 'required',
            'company_contact_f_name'    => 'required|min:2|max:150',
            'company_contact_l_name'    => 'required|min:2|max:150',
            'address'                   => 'required|min:2|max:250',
            'city'                      => 'required|min:2|max:50',
            'province_state'            => 'required|min:2|max:150',
            'zip_code'                  => 'required|regex:/\b\d{5}\b/',
            'booking_email'             => 'required|email|min:2|max:80',
            'booking_fax_number'        => 'required|min:2|max:80',
            'booking_phone_one'         => 'required|min:5|max:16',
            'booking_phone_two'         => 'min:5|max:16',
            'service_preferences'       => 'required',
            'product_descriptions'      => 'required',
            'service_preferences.*'     => 'required|exists:service_preferences,id',
            'product_descriptions.*'    => 'required|exists:product_descriptions,id',
            'reservation_email'         => 'required|email',
            'name'                      => 'required',
        ];
    }
}
