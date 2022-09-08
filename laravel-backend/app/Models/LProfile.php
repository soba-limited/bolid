<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class LProfile extends Model
{
    use HasFactory,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nicename',
        'sex',
        'zipcode',
        'zip',
        'other_address',
        'age',
        'work_type',
        'inductry',
        'occupation',
        'marriage',
        'child',
        'income',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'age'=>'integer',
        'marriage'=>'integer',
        'child'=>'integer',
    ];

    public function users()
    {
        return $this->hasOne(\App\Models\User::class);
    }
}