<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Lockups\Category;
use App\Http\Resources\Lockups\Country;
use App\Http\Resources\User;
class Opportunity extends JsonResource
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
         'title' => $this->title,
         'category' => new category($this->category),
         'country' => new Country($this->country),
         'deadline'=>$this->deadline->toDayDateTimeString(),
         'user'=> new User($this->user),

        ];
    }
}
