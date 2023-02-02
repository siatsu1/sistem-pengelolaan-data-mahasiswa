<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


use App\Models\User;

class AuthController extends Controller
{


    function login()
    {
        return view('login');
    }
    function registrasi()
    {
        return view('registrasi');
    }
    function prosesregistrasi()
    {
        $user = new User();
        $user->nama = request('nama');
        $user->username = request('username');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('/')->with('success', 'Registrasi berhasil');
    }
    function beranda()
    {
        return view('serverside.beranda');
    }
   
   

    function loginProcess()
    {
        if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {

            return redirect('admin/beranda')->with('success', 'Selamat datang admin SIAKAD');
           
        } else {
            return back()->with('error', 'Login gagal. Silahkan cek username dan password anda!');
        }
        
    }

    function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

   
}
