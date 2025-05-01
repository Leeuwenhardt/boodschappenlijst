<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function store() {
        $credentials = request()->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'username' => ['Sorry, incorrect username'],
            ]);
        };

        // regenerate session token (security to recycle the token)
        request()->session()->regenerate();

        return redirect('/myArticles');
    }

    public function destroy() {
        Auth::logout();

        return redirect('/');
    }
}
