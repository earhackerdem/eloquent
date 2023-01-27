<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function phone() : HasOne
    {
        return $this->hasOne(Phone::class,'user_id')->withDefault( [
            'phone' => 'No tiene telefono'
        ]);
    }

    public function courses() : HasMany
    {
        return $this->hasMany(Course::class)->withDefault([
            'courses' => 'No tiene cursos'
        ]);
    }

    public function latestCourse() : HasOne
    {
        return $this->hasOne(Course::class)->latestOfMany();
    }

    public function oldestCourse() : HasOne
    {
        return $this->hasOne(Course::class)->oldestOfMany();
    }

    public function roles() : BelongsToMany
    {
        return $this->belongsToMany(Role::class,'role_user','user_id','role_id')
        ->as('suscription')
        ->withPivot('active')
        ->withTimestamps();
    }

}
