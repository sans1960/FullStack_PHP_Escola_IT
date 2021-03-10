<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller
{
    public function index(){
        return "Benvingut a la ruta primera desde el Primer Controlador";
    }
}
