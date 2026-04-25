<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FacultyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name'=> $this->name,
            'description'=>$this->description,
            'deanName' =>$this->dean_name,
            'deanEmail' => $this->dean_email,
            'deanContact' => $this->dean_contact,
            'assistantDeanName' => $this->assistant_dean_name,
            'assistantDeanContact' => $this->assistant_dean_contact,
            'assistantDeanEmail' => $this->assistant_dean_email
        ];
    }
}
