<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Cek apakah yang dimasukkan adalah email atau username
        $field = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // Mencari user berdasarkan username atau email
        $user = User::where($field, $credentials['username'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Jika login berhasil, login pengguna menggunakan Auth
            Auth::login($user);
            return redirect()->route('homepage');
        }

        // Jika login gagal, kembali dengan pesan error
        return redirect()->route('login')
            ->withErrors(['error' => 'Invalid credentials'])
            ->withInput();
    }

    // Logout pengguna
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
