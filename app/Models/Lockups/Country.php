<?php

namespace App\Models\Lockups;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
     public $timestamps=false;
    protected $fillable = [
        'name','country_code','phone_code'
       ];

}
