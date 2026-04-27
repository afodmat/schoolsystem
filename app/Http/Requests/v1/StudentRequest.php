<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'phone_number' => 'required|string|max:255',
            'date_of_birth'=> 'required|date',
            'gender' => 'required|in:male,female',
            'student_number' => 'required|string|max:255',
            'nin_number' => 'nullable|string|max:255',
            'enrollment_date' => 'required|date',
            // 'is_enrolled',
            'address' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'course_id',
            'guardian_name' => 'required|string|max:255',
            'guardian_contact' => 'required|string|max:255',
            'guardian_relationship' => 'required|string|max:255',
            'guardian_address' => 'required|string|max:255',
            'admission_year',
            'study_mode',
            'academic_status',
            'photo_url' => 'required|required|image|mimes:jpg,jpeg,png|max:2048'
        ];
    }
}
