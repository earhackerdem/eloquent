<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $attributes = [
        'name' => 'México'
    ];

    protected $fillable = ['name'];

    // const CREATED_AT = 'created_date';
    // const UPDATED_AT = 'updated_date';

    // protected $connection = 'sqlite';

    // protected $table = 'list_destinations';

    // protected $primaryKey = 'identificator';

    // public $incrementing = false;

    // public $keyType = 'string';

    // public $timestamps = false;

    // protected $dateFormat = 'd-m-Y';

    // php artisan model:show Destination
}
