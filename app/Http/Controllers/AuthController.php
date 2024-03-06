<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        if ($user = Auth::user()) {
            switch ($user->level) {
                case '1':
                    return redirect()->intended('/');
                    break;
                case '2':
                    return redirect()->intended('transaksi');
                    break;
                case '3':
                    return redirect()->intended('laporan');
                    break;
            }
        }
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login');
    }

    public function cekLogin(AuthRequest $request)
    {
        $credential = $request->only('email', 'password');
        // dd($credential);
        $request->session()->regenerate();
        if (Auth::attempt($credential)) {
            $user = Auth::user();
            switch ($user->level) {
                case '1':
                    return redirect()->intended('/');
                    break;
                case '2':
                    return redirect()->intended('transaksi');
                    break;
                case '3':
                    return redirect()->intended('laporan');
                    break;
            }
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'Email or Password is wrong'
        ])->onlyInput('email');
    }
}
