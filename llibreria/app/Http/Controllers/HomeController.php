<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function __construct()
    {
      $this->middleware('dataara');
    }
    public function home(){


        Cookie::queue('status','Guest',120);
        return view('home');
    }
}
