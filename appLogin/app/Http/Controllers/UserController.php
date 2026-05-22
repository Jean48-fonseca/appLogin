<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
public function create()
    {
        $carrers = Career::all();
        return view('register', compact('carrers'));
    }
    public function store(Request $request){
        $request->validated([
            'name' => 'required|string|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',
            'career_id' => 'required|exists:careers,id',
            'terms_acceptd' => 'accepted',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>bcrypt( $request->password),
            'career_id' => $request->career_id,
            'terms_acceptd' => $request->has('terms_acceptd'),
        ]);

        return redirect()->route('register')->with('success', 'Usuario registrado exitosamente.');
    }
}
