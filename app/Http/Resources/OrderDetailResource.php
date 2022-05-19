<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'product'=>new ProductResource($this->product),
            'quantity'=>$this->quantity,
            'order'=>$this->order,
            'total_price'=>$this->total_price,
            'price'=>$this->price,
        ];
    }
}
