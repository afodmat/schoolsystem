<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class AdmissionRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'required|date',
            'address' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'program_applied_for' => 'required|string|max:255',
            'admission_year' => 'required|date',
            'documents'=> 'nullable|array',
            'status' => 'required|in:pending,accepting,rejected',
            'nin_number' => 'nullable|string|max:255',
            'passport_number' => 'required|string|max:255',
            'guardian_first_name' => 'required|string|max:255',
            'guardian_last_name' => 'required|string|max:255',
            'guardian_relationship' => 'required|string|max:255',
            'guardian_phone' => 'required|string|max:255',
            'photo_url' => 'required|required|image|mimes:jpg,jpeg,png|max:2048'
        ];
    }
}
