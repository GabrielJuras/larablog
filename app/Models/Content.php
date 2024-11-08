<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Content extends Model
{
    use HasFactory;
    protected $table = 'contents';

    public function para():HasMany
    {

        return $this->hasMany(Para::class);
    }
    
    public function pic():HasManyThrough
    {

        return $this->hasManyThrough(Pic::class, Para::class);
    }
}
