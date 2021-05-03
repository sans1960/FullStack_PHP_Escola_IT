<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Picture;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = ['name','capacity'];
    public function picture(){
        return $this->hasMany(Picture::class);
    }
}
