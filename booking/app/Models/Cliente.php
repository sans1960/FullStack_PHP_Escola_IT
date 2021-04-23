<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;
class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','poblacion','email','telefono'];
    public function reserva(){
        return $this->hasOne(Reserva::class);
    }
}
