<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        //id
        //title
        //description
        //created_at
        //updated_at
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description
            
        ];
    }
}
