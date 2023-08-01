<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    Public function Game(){
        return $this->belongsTo(Game::class);
    }
    Public function User(){
        return $this->belongsTo(User::class);
    }
}
