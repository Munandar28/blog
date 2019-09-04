<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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
            $karyawan = DB:: table('datakaryawan')->get();


            return view('test123',['karyawan' => $karyawan]);
            
        } else {
            return redirect()->route('home');
        }
    }

        // method untuk insert data ke table datakaryawan
     public function store(Request $request)
        {
            // insert data ke table datakaryawan
            DB::table('datakaryawan')->insert([
            
                'Nama' => $request->Nama,
                'Projek' => $request->Projek,
                'Software' => $request->Software
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/test123');
    
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

    public function tambah()
    {

	// memanggil view tambah
	return view('tambah');

    }

    
    
}
