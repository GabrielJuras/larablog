<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $table = 'contents';

    public function Para(){

        return $this->hasMany(Para::class);
    }
    public function Pic(){

        return $this->hasManyThrough(Pic::class, Para::class);
    }

}
