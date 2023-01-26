<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Mechanic extends Model
{
    use HasFactory;

    public function car(): Relation
    {
        return $this->hasOne(Car::class);
    }

    public function owner(): Relation
    {
        return $this->hasOneThrough(Owner::class, Car::class);
    }
}
