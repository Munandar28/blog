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

    public function admin()
    {
        if (Session::get('isLoggedIn') == true) {
            $karyawan = DB:: table('datakaryawan')->get();
            

            return view('admin',['karyawan' => $karyawan]);
            
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
            return redirect('/admin');
    
        }

     public function edit($id)
        {
            // mengambil data pegawai berdasarkan id yang dipilih
            $karyawan = DB::table('datakaryawan')->get()->where('no',$id);
            // passing data pegawai yang didapat ke view edit.blade.php


            return view('edit',['karyawan' => $karyawan]);
        
        }

        // public function edit(Request $request)
        // {
        //     $karyawan = DB::where('no', $request->no)->first();
    
        //     return view('edit')->with(compact('datakaryawan'));
        // }

        public function update(Request $request)
        {   
            // $request->
            // insert data ke table datakaryawan
            DB::table('datakaryawan')->where('no',$request->no)->update([
            
                'Nama' => $request->Nama,
                'Projek' => $request->Projek,
                'Software' => $request->Software
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/admin');
    
        }

        // method untuk hapus data pegawai
        public function hapus($id)
        {
            // menghapus data pegawai berdasarkan id yang dipilih
            DB::table('datakaryawan')->where('no',$id)->delete();
                
            // alihkan halaman ke halaman pegawai
            return redirect('/admin');
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
