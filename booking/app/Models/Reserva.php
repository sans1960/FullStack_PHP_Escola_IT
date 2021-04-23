<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Categoria;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable = ['fecha_llegada','fecha_salida','categoria_id','cliente_id'];
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
