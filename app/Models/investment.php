<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class investment extends Model
{
    use HasFactory;

    public function login(){
        return $this->belongsTo(login::class);
    }
}
