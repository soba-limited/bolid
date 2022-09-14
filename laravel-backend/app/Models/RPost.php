<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RPost extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'r_category_id',
        'r_series_id',
        'title',
        'thumbs',
        'mv',
        'sub_title',
        'discription',
        'content',
        'state',
        'created_at',
        'updated_at',
        'deleted_at',
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
        'user_id'=>'integer',
        'r_category_id'=>'integer',
        'r_series_id'=>'integer',
    ];

    public function Users()
    {
        return $this->belongsTo(User::class);
    }
    public function RBookmark()
    {
        return $this->belongsToMany(User::class, 'r_post_user', 'r_post_id', 'user_id');
    }
    public function RCategorys()
    {
        return $this->belongsTo(RCategory::class);
    }
    public function RSeries()
    {
        return $this->belongsTo(RSerie::class);
    }
}