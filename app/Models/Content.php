<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Content extends Model
{
    use HasFactory;

    protected $table = 'contents';

    // A Content has many Paras
    public function paras(): HasMany
    {
        return $this->hasMany(Para::class, 'content_id');
    }

    // Access all images through paras
    public function pic()
    {
        return $this->hasManyThrough(Pic::class, Para::class, 'content_id', 'para_id', 'id', 'id');
    }
    
    
    
}
return $content= Content::factory()->count(3)->make();