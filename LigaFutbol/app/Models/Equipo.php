<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partit;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable=['nombre','poblacion','escudo','campo','email','social'];
    public function partit(){
        return $this->belongsToMany(Partit::class);
    }

}
