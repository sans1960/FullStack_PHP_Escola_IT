<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Galeria extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','categoria_id','url'];
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
