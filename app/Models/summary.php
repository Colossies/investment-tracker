<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class summary extends Model
{
    use HasFactory;

    public function login(){
        return $this->belongsTo(login::class);
    }

    protected $fillable = [
        'value',
        'units',
        'value_unit',
        'amount_spent'
    ];
}
