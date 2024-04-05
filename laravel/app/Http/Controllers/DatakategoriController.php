<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Auth;

use App\Kategori;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DatakategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = Auth::user()->name;
        //return view('datakategori', compact('user'));

        // mengambil data dari table kategori
    	$kategori = DB::table('kategori')->get();
 
    	// mengirim data kategori ke view index
    	return view('datakategori',['kategori' => $kategori]);
    }

    // method untuk insert data ke table kategori
	public function store(Request $request)
	{
		// insert data ke table kategori
		DB::table('kategori')->insert([
			'nama_kategori' => $request->nama_kategori,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/datakategori');
    }

    public function tambah()
    {
	// memanggil view tambah kategori
	return view('tambahkategori');
    }

    // method untuk edit data kategori
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$kategori = DB::table('kategori')->where('id_kategori',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('datakategori_edit',['kategori' => $kategori]);
	}

    // update data pegawai
	public function rubah(Request $request)
	{
		// update data pegawai
		DB::table('kategori')->where('id_kategori',$request->id_kategori)->update([
			'nama_kategori' => $request->nama_kategori,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/datakategori');
	}

    // method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('kategori')->where('id_kategori',$id)->delete();
		// alihkan halaman ke halaman pegawai
		return redirect('/datakategori');
	}
}