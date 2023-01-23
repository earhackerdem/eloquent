<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Flight extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'number',
        'legs',
        'active',
        'departed',
        'arrived_at',
        'destination_id'
    ];

    protected $guarded = [
        'is_admin'
    ];
}
