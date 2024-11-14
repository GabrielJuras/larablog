<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pic extends Model
{   use HasFactory;

    protected $table = 'pics';

    // An Image belongs to a Para
    public function para(): BelongsTo
    {
        return $this->belongsTo(Para::class, 'para_id');
    }

    // An Image also belongs to a Content (if needed)
    public function content(): BelongsTo
    {
        return $this->belongsTo(Content::class, 'content_id');
    }
}