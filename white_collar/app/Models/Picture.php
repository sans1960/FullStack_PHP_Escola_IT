<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;

class Picture extends Model
{
    use HasFactory;
    protected $fillable = ['name','author','price','shop_id'];
    public function shop(){
        return $this->belongsTo(Shop::class);
    }
}
