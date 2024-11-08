<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Pic extends Model
{
    use HasFactory;
    public function para():BelongsTo
    {

        return $this->belongsTo(Para::class);
    }
    public function content():HasOneThrough
    {

    return $this->hasOneThrough(Content::class, Para::class);
    }
}