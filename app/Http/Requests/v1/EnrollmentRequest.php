<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class EnrollmentRequest extends FormRequest
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
            'student_id' => 'required|exists:student,id',
            'course_id' => 'required|exists:courses,id',
            'academic_year'=> 'required|date',
            'semester' => 'required|string|max:100',
            'level' => 'required|in:degree,diploma',
            'status',
            'isactive' => 'required|in:studying,withdrawn'
        ];
    }
}
