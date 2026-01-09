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
        'excerpt',
        'date',
        'tags',
        'read_time',
    ];

    // 
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
