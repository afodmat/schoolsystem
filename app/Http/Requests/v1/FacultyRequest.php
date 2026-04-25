<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class FacultyRequest extends FormRequest
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
            'name'=>'required|max:255|string',
            // 'courses_id' => 'required|exists:courses,id',
            'description' =>'required|max:255|string',
            'dean_name'=>'required|max:255|string',
            'dean_email' => 'required|email|unique:users,email',
            'dean_contact' =>'required|max:255|string',
            'assistant_dean_name' =>'required|max:255|string',
            'assistant_dean_contact' =>'required|max:255|string',
            'assistant_dean_email' => 'required|email|unique:users,email'
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'dean_name' => $this->deanName,
            'assistant_dean_name' => $this->assistantDeanName,
            'dean_email' => $this->deanEmail,
            'dean_contact' => $this->deanContact,
            'assistant_dean_name' => $this->assistantDeanContact,
            'assistant_dean_email' => $this->assistantDeanEmail
        ]);
    }
}
