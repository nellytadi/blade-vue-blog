<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param   $request
     * @return array
     */
    public function toArray($request): array
    {
        return parent::toArray($request);
    }
}
