<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Migrate\Migrate;
use App\Http\Controllers\Genre;
use File;
use Response;


use App\Models\Kategori;

class ListpermohonanController extends Controller
{
    public function index()
    {
        //$user = Auth::user()->name;
        //return view('dataadmin', compact('user'));

        // mengambil data dari table admin
    	$permohonan=DB::table('permohonan')
                        ->join('kegiatan','permohonan.id_kegiatan','=','kegiatan.id_kegiatan')
                        ->join('mahasiswa','mahasiswa.nim','=','permohonan.nim')
                        ->get();
        $kategori = kategori::all();
        $datasemua = DB::table('permohonan')->get();
        $dataacc = DB::table('permohonan')->where('status_permohonan','acc')->get();
        $dataverivikasi = DB::table('permohonan')->where('status_permohonan','pending')->get();
        $datatolak = DB::table('permohonan')->where('status_permohonan','tolak')->get();
        
    	// mengirim data admin ke view index
    	return view('listpermohonan',['permohonan' => $permohonan,'kategori'=>$kategori
        ,'datasemua'=>count($datasemua)
        ,'dataacc'=>count($dataacc)
        ,'dataverivikasi'=>count($dataverivikasi)
        ,'datatolak'=>count($datatolak)]);
    }

    // update data pegawai
	public function acc($id_permohonan)
	{
		// update data pegawai
		DB::table('permohonan')->where('id_permohonan',$id_permohonan)
        ->update([
            'status_permohonan' =>'acc',
         ]);
		// alihkan halaman ke halaman pegawai
		return redirect('/listpermohonan');
        
	}

    // update data pegawai
	public function tolak($id_permohonan)
	{
		 // update data pegawai
		DB::table('permohonan')->where('id_permohonan',$id_permohonan)
        ->update([
            'status_permohonan' =>'tolak',
         ]);
		// alihkan halaman ke halaman pegawai
		return redirect('/listpermohonan');
        
	}

    public function masuk()
    {
        // update data pegawai
		$permohonan=DB::table('permohonan')->where('status_permohonan',"acc")
                        ->join('kegiatan','permohonan.id_kegiatan','=','kegiatan.id_kegiatan')
                        ->join('mahasiswa','mahasiswa.nim','=','permohonan.nim')
                        ->get();
        $kategori = kategori::all();
        $datasemua = DB::table('permohonan')->get();
        $dataacc = DB::table('permohonan')->where('status_permohonan','acc')->get();
        $dataverivikasi = DB::table('permohonan')->where('status_permohonan','pending')->get();
        $datatolak = DB::table('permohonan')->where('status_permohonan','tolak')->get();
        
    	// mengirim data admin ke view index
    	return view('listpermohonan',['permohonan' => $permohonan,'kategori'=>$kategori
        ,'datasemua'=>count($datasemua)
        ,'dataacc'=>count($dataacc)
        ,'dataverivikasi'=>count($dataverivikasi)
        ,'datatolak'=>count($datatolak)]);
    }

    public function ditolak()
    {
        // update data pegawai
		$permohonan=DB::table('permohonan')->where('status_permohonan',"tolak")
                        ->join('kegiatan','permohonan.id_kegiatan','=','kegiatan.id_kegiatan')
                        ->join('mahasiswa','mahasiswa.nim','=','permohonan.nim')
                        ->get();
        $kategori = kategori::all();
        $datasemua = DB::table('permohonan')->get();
        $dataacc = DB::table('permohonan')->where('status_permohonan','acc')->get();
        $dataverivikasi = DB::table('permohonan')->where('status_permohonan','pending')->get();
        $datatolak = DB::table('permohonan')->where('status_permohonan','tolak')->get();
        
    	// mengirim data admin ke view index
    	return view('listpermohonan',['permohonan' => $permohonan,'kategori'=>$kategori
        ,'datasemua'=>count($datasemua)
        ,'dataacc'=>count($dataacc)
        ,'dataverivikasi'=>count($dataverivikasi)
        ,'datatolak'=>count($datatolak)]);
    }

    public function belumtervalidasi()
    {
        // update data pegawai
		$permohonan=DB::table('permohonan')->where('status_permohonan',"pending")
                        ->join('kegiatan','permohonan.id_kegiatan','=','kegiatan.id_kegiatan')
                        ->join('mahasiswa','mahasiswa.nim','=','permohonan.nim')
                        ->get();
        $kategori = kategori::all();
        $datasemua = DB::table('permohonan')->get();
        $dataacc = DB::table('permohonan')->where('status_permohonan','acc')->get();
        $dataverivikasi = DB::table('permohonan')->where('status_permohonan','pending')->get();
        $datatolak = DB::table('permohonan')->where('status_permohonan','tolak')->get();
        
    	// mengirim data admin ke view index
    	return view('listpermohonan',['permohonan' => $permohonan,'kategori'=>$kategori
        ,'datasemua'=>count($datasemua)
        ,'dataacc'=>count($dataacc)
        ,'dataverivikasi'=>count($dataverivikasi)
        ,'datatolak'=>count($datatolak)]);
    }

    public function cetak($id)
	{
		 // update data pegawai
         DB::table('permohonan')->where('id_permohonan',$id_permohonan);
         // alihkan halaman ke halaman pegawai
         return redirect('/cetak');

	}

    public function buka_file($id)
	{
		 // update data pegawai
         $permohonan = DB::table('permohonan')->where('id_permohonan',$id);
         // alihkan halaman ke halaman pegawai
        // return view('/lampiran');
        return view('lampiran',['permohonan' => $permohonan]);
	}
}