<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' =>$this->id,
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            'phoneNumber' => $this->phone_number,
            'class1' => $this->class1,
            'class2' => $this->class2,
            'email' => $this->email,
            'joiningDate' => $this->joining_date,
            'role' => $this->role,
            'dateOfBirth' => $this->date_of_birth,
            'age' => $this->age,
            'address' => $this->address,
            'subject1' => $this->subject1,
            'subject2' => $this->subject2,
            'subject3' => $this->subject3,
            'gender' => $this->gender,
            'photoUrl' => $this->photo_url,
        ];
    }
}
