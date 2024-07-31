<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'required',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'date_of_birth' => 'required|string',
            'phone_number' => 'required|string',
            'email_address' => 'required|string|email',
            'province_id' => 'required|numeric',
            'old_city' => 'required|numeric',
            'city_id' => 'nullable|numeric',
            'street_address' => 'required|string',
            'zip_code' => 'required|numeric',
            'ktp_number' => 'required|numeric',
            'position_id' => 'required|numeric',
            'bank_id' => 'required|numeric',
            'bank_account_number' => 'required|numeric'
        ];
    }
}
