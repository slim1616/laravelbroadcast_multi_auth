<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
            'data' => [
            'id' => $this->id,
            'name' => $this->name,
            'group' => [],
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'avatar' => '',
            
            
        ]
        ];
    }
}
