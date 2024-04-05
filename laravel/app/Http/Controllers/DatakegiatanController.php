<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DatakegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = Auth::user()->name;
        //return view('datakegiatan', compact('user'));

        // mengambil data dari table kegiatan
    	//$kegiatan = DB::table('kegiatan')->get(); 
		$kegiatan = DB::table('kegiatan')
		->join('kategori','kegiatan.id_kategori','=','kategori.id_kategori')
		->get();
    	// mengirim data kegiatan ke view index
    	return view('datakegiatan',['kegiatan' => $kegiatan]);
    }

    // method untuk insert data ke table users
	public function store(Request $request)
	{
		// insert data ke table users
		DB::table('kegiatan')->insert([
			'id_kategori' => $request->id_kategori,
			'nama_kegiatan' => $request->nama_kegiatan,
			'point' => $request->poin,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/datakegiatan');
	}

    // method untuk edit data users
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$kegiatan = DB::table('kegiatan')->where('id_kegiatan',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('datakegiatan_edit',['kegiatan' => $kegiatan]);
	}

    // update data pegawai
	public function rubah(Request $request)
	{
		// update data pegawai
		DB::table('kegiatan')->where('id_kegiatan',$request->id_kegiatan)->update([
			'id_kategori' => $request->id_kategori,
			'nama_kegiatan' => $request->nama_kegiatan,
			'point' => $request->point,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/datakegiatan');
	}

    // method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('kegiatan')->where('id_kegiatan',$id)->delete();
		// alihkan halaman ke halaman pegawai
		return redirect('/datakegiatan');
	}
}