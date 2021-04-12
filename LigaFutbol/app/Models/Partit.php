<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipo;

class Partit extends Model
{
    use HasFactory;
    protected $fillable=['dia','hora','campo','resultado','comentarios'];
    public function equipo(){
        return $this->belongsToMany(Equipo::class);
    }
}
