<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatKnowledge extends Model
{
    protected $table = 'chat_knowledge';

    protected $fillable = [
        'type',
        'title',
        'keywords',
        'content',
        'is_active',
        'priority',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'priority' => 'integer',
    ];
}
