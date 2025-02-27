<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'price' => 'float',
        'talk_id' => 'integer',
    ];

    public function talk(): BelongsTo
    {
        return $this->belongsTo(Talk::class);
    }
}
