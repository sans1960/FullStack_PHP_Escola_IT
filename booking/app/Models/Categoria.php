<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Galeria;
use App\Models\Reserva;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','caracteristicas','precio'];
    public function galeria(){
        return $this->hasOne(Galeria::class);
    }
    public function reserva(){
        return $this->hasMany(Reserva::class);
    }
}
