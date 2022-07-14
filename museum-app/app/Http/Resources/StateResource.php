<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'state';
    public function toArray($request)
    {
        return[
            'id' =>$this->resource->id,
            'name'=>$this->resource->name,
            'currency'=>$this->resource->currency
            
            ];
    }
}
