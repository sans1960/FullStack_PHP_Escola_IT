<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TercerController extends Controller
{
    public function benvingut($nom){
        return "Benvingut a la tercera ruta desde el Tercer Controlador, et dius : $nom";
    }
}
