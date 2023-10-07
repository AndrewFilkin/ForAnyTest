<?php

namespace App\Http\Resources\Other;

use Illuminate\Http\Resources\Json\JsonResource;

class OtherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => '1234',
            'name' => 'Test name',
            'description' => 'Test Description',
            'price' => 'Test Price',
        ];
    }
}
