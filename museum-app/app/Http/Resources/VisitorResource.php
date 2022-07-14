<?php

namespace App\Http\Resources;
use App\Models\Visitor;
use App\Http\Resources\MuseumResource;
use App\Http\Resources\StateResource;

use Illuminate\Http\Resources\Json\JsonResource;

class VisitorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public function toArray($request)
    {
        return[

            'id' =>$this->resource->id,
            'nameAndSurname'=>$this->resource->nameAndSurname,
            'email'=>$this->resource->email,
            'age'=>$this->resource->age,
            'museum_id'=> new MuseumResource($this->resource->museum),
            'state_id'=> new StateResource($this->resource->state)
            
            ];
    }
}
