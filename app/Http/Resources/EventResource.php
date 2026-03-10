<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'date_of_event' => $this->date_of_event,
            'fellowship' => [
                'id' => $this->fellowship->id,
                'name' => $this->fellowship->name
            ]
        ];
    }
}
