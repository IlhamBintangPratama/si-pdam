<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'username' => $request->username,
            'password' => md5($request->password)
        ];

        // dd($infologin);
        if(Auth::attempt($infologin))
        {
            return redirect('/menu-admin/dasboard')->with('success', 'Selamat datang dihalaman admin dashboard');
        
        }else{
            return redirect('login')->with('error', 'Username dan password salah');
        }

    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
