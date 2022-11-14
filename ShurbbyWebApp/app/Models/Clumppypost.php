<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clumppypost extends Model
{
    use HasFactory;

    protected $fillable =[
        'clumppy_id',
        'description',
        'like',
        'share',
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
