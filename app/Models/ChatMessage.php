<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChatMessage extends Model
{
    protected $fillable = ['lead_id', 'role', 'content'];

    public function lead(): BelongsTo
    {
        return $this->belongsTo(ChatLead::class, 'lead_id');
    }
}
