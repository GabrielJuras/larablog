<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Para extends Model
{   use HasFactory;

    protected $table = 'paras';

    // A Para belongs to a Content
    public function content(): BelongsTo
    {
        return $this->belongsTo(Content::class, 'content_id');
    }

    // A Para has many Images
    public function pic(): HasMany
    {
        return $this->hasMany(Pic::class, 'para_id');
    }
}