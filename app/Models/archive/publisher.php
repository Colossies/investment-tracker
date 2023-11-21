<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    use HasFactory;

    public function game_company(){
        return $this->hasMany(game_company::class);
    }

    public function get_publishers(){
        return $this::all();
    }
}
