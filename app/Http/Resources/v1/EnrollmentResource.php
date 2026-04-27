<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EnrollmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'student_id' =>$this->student_id,
            'course_id' =>$this->course_id,
            'academic_year' =>$this->academic_year,
            'semester' =>$this->semester,
            'level' =>$this->level,
            'status' =>$this->status,
            'isactive'=>$this->isactive
        ];
    }
}
