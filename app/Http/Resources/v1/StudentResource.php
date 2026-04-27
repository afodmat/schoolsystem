<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'first_name' =>$this->first_name,
            'last_name' =>$this->last_name,
            'email' =>$this->email,
            'phone_number' => $this->phone_number,
            'date_of_birth' =>$this->date_of_birth,
            'gender' =>$this->gender,
            'student_number' =>$this->student_number,
            'nin_number' =>$this->nin_number,
            'age' => $this->age,
            'enrollment_date' =>$this->enrollment_date,
            'is_enrolled' =>$this->is_enrolled,
            'address' =>$this->address,
            'nationality' =>$this->nationality,
            'course_id' =>$this->course_id,
            'guardian_name' =>$this->guardian_name,
            'guardian_contact' =>$this->guardian_contact,
            'guardian_relationship' =>$this->guardian_relationship,
            'guardian_address' =>$this->guardian_address,
            'admission_year' =>$this->admission_year,
            'study_mode' =>$this->study_mode,
            'academic_status' =>$this->academic_status,
            'photo_url' =>$this->photo_url
        ];
    }
}
