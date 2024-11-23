<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            // Check if the user was created
            if (!$user) {
                return back()->withErrors(['error' => 'Failed to create user']);
            }
    
            Auth::login($user);
    
            return redirect()->route('home');
        } catch (\Exception $e) {
            // Log the error for debugging
            return back()->withErrors(['error' => 'Error: ' . $e->getMessage()]);
        }
    }
    public function page_facultes(){
        return view('page_facultes');
    }
    public function page_facultes1(){
        return view('page_facultes1');
    }
    public function page_facultes2(){
        return view('page_facultes2');
    }

    
}