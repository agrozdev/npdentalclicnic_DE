<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ChatLead extends Model
{
    protected $fillable = [
        'session_token',
        'source',
        'name',
        'phone',
        'email',
        'first_message',
        'status',
    ];

    public function messages(): HasMany
    {
        return $this->hasMany(ChatMessage::class, 'lead_id')->orderBy('created_at');
    }
}
