<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Menampilkan halaman Sign In
    public function showSignIn()
    {
        return view('auth.sign-in');
    }

    // Menampilkan halaman Sign Up
    public function showSignUp()
    {
        return view('auth.sign-up');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Jika kredensial cocok
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Arahkan ke halaman home setelah login berhasil
            return redirect()->route('home')->with('success', 'Login berhasil!');
        }

        // Jika kredensial salah
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users,username',  // Validasi username
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Membuat user baru
        User::create([
            'username' => $request->username,  // Menyimpan username
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login otomatis setelah registrasi
        Auth::attempt($request->only('email', 'password'));

        // Arahkan ke halaman home setelah registrasi berhasil
        return redirect()->route('home')->with('success', 'Registrasi berhasil!');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Anda berhasil logout.');
    }
}
