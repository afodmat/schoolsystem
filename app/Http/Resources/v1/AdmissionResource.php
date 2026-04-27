<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdmissionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' =>$this->phone,
            'gender' => $this->gender,
            'date_of_birth' => $this->date_of_birth,
            'address'=>$this->address,
            'nationality' =>$this->nationality,
            'program_applied_for' =>$this->program_applied_for,
            'admission_year' =>$this->admission_year,
            'documents' =>$this->documents,
            'status',
            'nin_number' =>$this->nin_number,
            'passport_number' =>$this->passport_number,
            'guardian_first_name' =>$this->guardian_first_name,
            'guardian_last_name' =>$this->guardian_last_name,
            'guardian_relationship' =>$this->guardian_relationship,
            'guardian_phone' =>$this->guardian_phone,
            'photo_url' =>$this->photo_url
        ];
    }
}
