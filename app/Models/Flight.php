<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Flight extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Prunable;

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

    public function prunable()
    {
        return static::where('departed',true);
    }

    public function pruning()
    {
        //Eliminar los archivos asociados al modelo
        Storage::delete($this->image);
    }
}
