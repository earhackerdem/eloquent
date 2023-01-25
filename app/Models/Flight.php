<?php

namespace App\Models;

use App\Scopes\NotDeparted;
use Illuminate\Database\Eloquent\Builder;
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

    // protected static function booted()
    // {
    //     // static::addGlobalScope('not_departed',function(Builder $builder){
    //     //     $builder->where('departed',false);
    //     // });

    //     static::addGlobalScope(new NotDeparted);
    // }

    public function scopeActive($query )
    {
        $query->where('active',true);
    }

    public function scopeLegs($query, $number)
    {
        $query->where('legs',$number);
    }
}
