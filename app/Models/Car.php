<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Car extends Model
{
    use HasFactory;


    public function mechanic(): Relation
    {
        return $this->belongsTo(Mechanic::class);
    }


    public function owner() : Relation
    {
        return $this->hasOne(Owner::class);
    }
}
