<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Para extends Model
{
    use HasFactory;
    public function Para(){
        
        return $this->hasMany(Content::class);
    }
    public function Pic(){
        
        return $this->hasMany(Para::class);
    }
}
