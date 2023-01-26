<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Course extends Model
{
    use HasFactory;

    public function user() : Relation
    {
        return $this->belongsTo(User::class,'user_id')->withDefault([
            'user' => 'No tiene usuario'
        ]);
    }

    public function sections() : Relation
    {
        return $this->hasMany(Section::class,'course_id','id');
    }

    public function lessons() : Relation
    {
        return $this->hasManyThrough(Lesson::class,Section::class);
    }


}
