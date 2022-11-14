<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Registration Page
    public function register() {
        return view('users.register');
    }

    // Store User Registration 
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:1']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        
        $user = User::create($formFields);
        
        auth()->login($user);
        
        return redirect('/');
    }

    // Logout
    public function delete(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }

    // login
    public function login() {
       return view('users.login');
    }

    // Authenticate
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/');
        }
        
        return back()->withErrors(['email' =>'invalid credentials'])->onlyInput('email');
    }




}
