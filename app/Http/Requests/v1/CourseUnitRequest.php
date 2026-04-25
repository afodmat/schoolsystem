<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class CourseUnitRequest extends FormRequest
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
            'name' => 'required|max:255|string',
        'code' => 
            'required',
            'string',
            'max:20',
            'unique:course_units,code',
            'regex:/^[A-Z]{2,4}[0-9]{3,4}$/'
    ,
        'description' => 'nullable|text',
        'type'=> 'required|in:core,elective'
        ];
    }
}
