<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Meaning;


class Word extends Model
{
    use HasFactory;
    
    public function meanings(){
        return $this->belongsToMany(Meaning::class);
    }
}
