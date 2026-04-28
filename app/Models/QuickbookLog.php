<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuickbookLog extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'request',
        'response',
        'status',
        'message'
    ];

    protected $casts = [
        'request' => 'array',
        'response' => 'array',
    ];
}