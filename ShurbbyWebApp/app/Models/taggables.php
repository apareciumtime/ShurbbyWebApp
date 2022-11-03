<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class taggables extends Pivot
{
    //
    protected $fillable =[
        'tag_id',
        'taggable_id',
        'taggable_type',
    ];
}
