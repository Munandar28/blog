<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    // Return view cv.blade.php kalau sedang login
    // kalau tidak login dilempar kembali ke homepage
    public function cv()
    {
        if (Session::get('isLoggedIn') == true) {
            return view('cv');
        } else {
            return redirect()->route('home');
        }
    }

    public function test123()
    {
        if (Session::get('isLoggedIn') == true) {
            return view('test123');
            
        } else {
            return redirect()->route('home');
        }
    }

    // Return view portfolio.blade.php kalau sedang login
    // kalau tidak login dilempar kembali ke homepage
    public function portfolio()
    {
        if (Session::get('isLoggedIn') == true) {
            return view('portfolio');
        } else {
            return redirect()->route('home');
        }
    }
    
}
