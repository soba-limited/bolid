<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

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
        'account_type',
        'r_profile_id',
        'c_profile_id',
        'd_profile_id',
        'point',
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
        'account_type' => 'integer',
        'r_profile_id' => 'integer',
        'c_profile_id' => 'integer',
        'd_profile_id' => 'integer',
        'point' => 'integer',
    ];

    public function RPost()
    {
        return $this->hasMany(RPost::class);
    }
    public function RProfile()
    {
        return $this->belongsTo(RProfile::class);
    }
    public function RPresent()
    {
        return $this->belongsToMany(RPresent::class);
    }
    public function RBookmark()
    {
        return $this->belongsToMany(RPost::class, 'r_post_user', 'user_id', 'r_post_id');
    }
}