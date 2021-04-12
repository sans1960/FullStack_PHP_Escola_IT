<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Partit;

class HomeController extends Controller
{
    public function index(){
        $partits = Partit::all();
        $equipos=Equipo::all();
        return view('welcome',compact('equipos','partits'));
    }

}
