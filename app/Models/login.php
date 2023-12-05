<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    use HasFactory;
    // hasMany investment
    // hasMany summary

    public function investment(){
        return $this->hasMany(investment::class);
    }

    public function summary(){
        return $this->hasMany(summary::class);
    }
}
