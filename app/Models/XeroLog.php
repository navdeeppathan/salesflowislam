<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class XeroLog extends Model
{
    protected $table = 'xero_logs';

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