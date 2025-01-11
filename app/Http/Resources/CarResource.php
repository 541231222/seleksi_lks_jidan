<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
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
            'brand_name' => $this->brand_name,
            'price_per_day' => $this->price_per_day,
            'stock' => $this->stock,
        ];
    }
}

// RESOURCE NANTI AKAN DITAMPILKAN PADA GET
