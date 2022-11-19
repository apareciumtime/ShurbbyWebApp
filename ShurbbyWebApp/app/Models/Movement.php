<?php

namespace App\Models;

use Conner\Likeable\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movement extends Model
{
    use HasFactory, Likeable;

    protected $fillable =[
        'clumppy_id',
        'description',
        'like',
        'is_private',
    ];


    public function clumppy(){
        return $this->belongsTo(Clumppy::class);
    }

    public function tags() 
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
