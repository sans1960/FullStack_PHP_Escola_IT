<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ['player_id','dia','hora','dado1','dado2','resultado'];
    public function player(){
        return $this->belongsTo(Player::class);
    }
}
