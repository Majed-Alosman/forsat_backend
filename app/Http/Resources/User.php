<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
           'id' => $this->id,
           'firstName' => $this ->first_name ,
           'lastName' => $this->last_name ,
           'profilePicture' => $this->profilePicture,
           'orgnaizer'=>$this->orgnaizer,
           'created_at'=>$this->created_at->toDateTimeString(),
           'updated_at' =>$this->updated_at->toDateTimeString(),
         ];
    }
}
