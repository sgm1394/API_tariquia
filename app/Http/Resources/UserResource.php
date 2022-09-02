<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name'=>$this->name,
            'lastname'=>$this->lastname,
            'id_rol'=>$this->id_rol,
            'id_carrera'=>$this->id_carrera,
            'id_materia'=>$this->id_materia,
            'user'=>$this->user,
            'email'=>$this->email,
            'password'=>$this->password,
        ];
    }
}
