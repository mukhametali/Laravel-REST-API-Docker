<?php

namespace App\Http\Resources\SalesLead;

use Illuminate\Http\Resources\Json\JsonResource;

class SalesLeadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'message' => $this->message,
            'tags' => new SalesTagCollection($this->tags),
        ];
    }
}
