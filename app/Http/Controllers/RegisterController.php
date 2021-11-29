<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedDataRegister = $request->validate ([
            'name' => 'required|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        $validatedDataRegister['password'] = Hash::make($validatedDataRegister['password']);

        User::create($validatedDataRegister);

        // $request->session()->flash('succesRegistration', 'Registration successfull, Please Login ');

        return redirect('/login')->with('succesRegistration', 'Registration successfull, Please Login ');
    }
}
