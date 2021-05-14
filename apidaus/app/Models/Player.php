<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Game;

class Player extends Model
{
    use HasFactory;
    protected $fillable = ['alias','fecha_alta','user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function game(){
        return $this->hasMany(Game::class);
    }
}
