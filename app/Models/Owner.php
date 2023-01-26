<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Owner extends Model
{
    use HasFactory;

    public function car() : Relation
    {
       return $this->belongsTo(Car::class);
    }
}
