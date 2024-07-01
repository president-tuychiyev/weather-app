<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function signIn()
    {
        $user = User::where('email', request()->email)->first();
        if ($user) {
            if (Hash::check(request()->password, $user->password)) {
                auth()->login($user);
                return to_route('dashboard');
            }

            return back()->with('message', 'Error password');
        }

        return back()->with('message', 'User not found');
    }

    public function logout()
    {
        auth()->logout();

        return to_route('home');
    }
}
