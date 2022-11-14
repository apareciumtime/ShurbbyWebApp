<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clumppy extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'name',
        'description',
        'plant_date',
        'cover',
        'is_private',
        'amount',
    ];

    public function tags()  
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function clumppyposts()
    {
        return $this->hasMany(Clumppyposts::class);
    }
}
