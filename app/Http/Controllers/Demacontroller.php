<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Demacontroller extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }
}

