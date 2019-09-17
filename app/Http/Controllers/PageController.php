<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;

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
        return view('cv');
    }

    public function admin()
    {
        if(Auth::user()->role != 'admin')
        {
            return redirect()->route('home');
        }
        else
        {
            if (Session::get('isLoggedIn') == true) {
                $karyawan = DB:: table('datakaryawan')->get();

                $kerja = DB::table('magang_kerja')->get();
                

                return view('admin',['karyawan' => $karyawan , 'kerja' => $kerja]);
                
            } else {
                return redirect()->route('home');
            }
        }
    }

    //view untuk register
    public function register(Request $request)
    {
        if(Auth::user()->role != 'admin')
        {
            return redirect()->route('home');
        }

        if (Session::get('isLoggedIn') == true) {
            //  $users = DB:: table('users')->get();
            //  DB::table('users')->insert([
            
            //     'email' => $request->email,
            //     'password' => $request->password,
            //     'nama' => $request->nama,
            //     'role'=> 'member' 
            //]);
            return view('/register');
            
        } else {
            return redirect()->route('home');
        }
    }

    
    // method untuk insert data ke table users
    public function userstore(Request $request)
        {
            // insert data ke table user
            DB::table('users')->insert([
            
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'nama' => $request->nama,
                'role'=> 'member' 
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/admin');    
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

            DB::table('magang_kerja')->insert([
            
                'Nama' => $request->Nama,
                'Projek' => $request->Projek,
                'Software' => $request->Software
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/admin');
    
        }
    
        //untuk view edit
        public function edit($id)
        {
            if(Auth::user()->role != 'admin')
            {
                return redirect()->route('home');
            }
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
            if(Auth::user()->role != 'admin')
            {
                return redirect()->route('home');
            }
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
