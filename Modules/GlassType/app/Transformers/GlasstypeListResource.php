<?php

namespace Modules\GlassType\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GlasstypeListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            "id"   => $this->id,
            "name"  => $this->name,
            "description"  => $this->description,
            "size"  => $this->size,
            'status'  => $this->status
        ];
    }
}
