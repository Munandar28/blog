<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\User;

class SignInController extends Controller
{
    // kalau login dilempar ke cv
    // kalau belum login dilempar ke page signin
    public function index()
    {
        return Session::get('isLoggedIn') ?  redirect()->route('cv') : view('signin');
    }

    // fungsi authentication
    public function auth(Request $request)
    {
        // cari user sesuai email
        $user = User::where('email', $request->email);
        // cek user ada atau tidak
        if ($user->count() != 0) {
            $user = User::where('email', $request->email)->first();
        } else {
            return redirect()->route('signin');
        }
        // cek password user
        if (Hash::check($request->password, $user->password)) {
            // register session
            Session::put('isLoggedIn', true);
            Session::put('userId', $user->id);
            Session::put('userName', $user->name);
            return redirect()->route('cv');
        } else {
            // kalau password salah redirect ke signin lagi
            return redirect()->route('signin');
        }
    }

    // fungsi signout
    // redirect ke homepage
    public function signout()
    {
        Session::flush();
        return redirect()->route('home');
    }
}
