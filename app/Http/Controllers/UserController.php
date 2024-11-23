<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\User;



class UserController extends Controller
{
    public function index(){
        return view ('home');
    }
}
