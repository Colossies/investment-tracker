<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game_company extends Model
{
    use HasFactory;

    public function game(){
        return $this->hasMany(Game::class);
    }
    
    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
}
