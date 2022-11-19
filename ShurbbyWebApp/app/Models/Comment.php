<?php

namespace App\Models;

use Conner\Likeable\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory, Likeable;
    protected $fillable =[
        'commentable_type',
        'commentable_id',
        'comment_id',
        'user_id',
        'content',
        'like',
        'credit',
        'accept',
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
       
    ];

    // public function shrubbies() {
    //     return $this->belongsTo(\App\Shrubby::class);
    // }
    public function commentable()
    {
        return $this->morphTo();
    }
}
