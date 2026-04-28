<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuickbookToken extends Model
{
    use HasFactory;

    protected $table = 'quickbook_tokens';

    protected $fillable = [
        'user_id',
        'access_token',
        'refresh_token',
        'realm_id',
        'expires_at',
    ];

    protected $casts = [
        'expires_at' => 'datetime',
    ];

    // 🔗 Relation (optional)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 🔄 Check if expired
    public function isExpired()
    {
        return now()->greaterThan($this->expires_at);
    }
}