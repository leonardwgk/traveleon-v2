<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function logvalidate(Request $request)
    {
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];
        $data = $request->validate($rules);
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            if (auth()->user()->role === 'user') {
                return redirect('/user');
            }
            if (auth()->user()->role === 'admin') {
                return redirect('/admin');
            }
        }
        return redirect()->route('login')->with('failed', 'Akun kamu belum terdaftar, silakan daftar!');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'nik' => 'required',
            'umur' => 'required',
            'telpon' => 'required',
            'email' => 'required',
            'negara' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
            'password' => 'required'
        ];

        $data = $request->validate($rules);
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
