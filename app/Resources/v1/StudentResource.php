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
            'id' =>$this->id,
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            'phoneNumber' => $this->phone_number,
            'class' => $this->class,
            'stream' => $this->stream,
            'email' => $this->email,
            'enrollmentDate' => $this->enrollment_date,
            'isEnrolled' => $this->is_enrolled,
            'dateOfBirth' => $this->date_of_birth,
            'age' => $this->age,
            'city' => $this->city,
            'district' => $this->district,
            'country' => $this->country,
            'gender' => $this->gender,
            'guardianName' => $this->guardian_name,
            'guardianContact' => $this->guardian_contact,
            'guardianRelationship' => $this->guardianR_relationship,
            'photoUrl' => $this->photo_url,
        ];
    }
}
