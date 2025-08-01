<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'content',
        'date',
        'tags',
        'read_time',
    ];
}
