<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailReceived extends Model
{
    // table
    protected $table = 'emails_received';
    // fillable
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'message',
        'ip',
        'privacy'
    ];
}
