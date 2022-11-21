<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable =[
        'name',
        'num_follower',
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

    public function shrubbies()
    {
        return $this->morphedByMany(Shrubby::class, 'taggable');
    }

    public function clumppies()
    {
        return $this->morphedByMany(Clumppy::class, 'taggable');
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function movements()
    {
        return $this->morphedByMany(Movement::class, 'taggable');
    }
}
