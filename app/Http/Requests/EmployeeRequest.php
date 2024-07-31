<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'date_of_birth' => 'required|string',
            'phone_number' => 'required|string',
            'email_address' => 'required|string|email',
            'province_id' => 'required|numeric',
            'city_id' => 'required|numeric',
            'street_address' => 'required|string',
            'zip_code' => 'required|numeric',
            'ktp_number' => 'required|numeric',
            'position_id' => 'required|numeric',
            'bank_id' => 'required|numeric',
            'bank_account_number' => 'required|numeric'
        ];
    }

    // public function messages()
    // {
        // return [
        //     'first_name.required' => 'First Name wajib diisi.',
        //     'last_name.required' => 'Last Name wajib diisi.',
        //     'date_of_birth.required' => 'Date of Birth wajib diisi',
        //     'email_address.required' => 'Email wajib diisi.',
        //     'email.email' => 'Format Email tidak valid.',
        //     'email.unique' => 'Email sudah digunakan.',
        //     'phone_number.required' => 'Phone Number wajib diisi.',
        //     'position.required' => 'Posisi wajib diisi.',
        //     // tambahkan pesan kesalahan lainnya sesuai kebutuhan
        // ];
    // }
}
