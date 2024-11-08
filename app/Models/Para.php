<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Para extends Model
{
    use HasFactory; 

    public function content():BelongsTo
    {

        return $this->belongsTo(Content::class);
    }

    public function pic():HasMany
    {

        return $this->hasMany(Pic::class);
}
}
