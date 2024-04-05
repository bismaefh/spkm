<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Contracts\Container\BindingResolutionException;
use File;
use Carbon;


use App\Models\Kategori;
class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permohonan = DB::table('permohonan')->join('kegiatan','permohonan.id_kegiatan','=','kegiatan.id_kegiatan')
                    ->where('nim','=',Auth::user()->nim)->get();
        $kategori = kategori::all();
        //menghitung jumlah data
        $datatotal = DB::table('permohonan')->where('nim','=',Auth::user()->nim)->get();
        $dataacc = DB::table('permohonan')->where('status_permohonan','acc')
                            ->where(Function($query){
                                $query->where('nim','=',Auth::user()->nim);})->get();
        $dataverivikasi = DB::table('permohonan')->where('status_permohonan','pending')
                            ->where(Function($query){
                                $query->where('nim','=',Auth::user()->nim);})->get();
        $datatolak = DB::table('permohonan')->where('status_permohonan','tolak')
                            ->where(Function($query){
                                $query->where('nim','=',Auth::user()->nim);})->get();
        
    	// mengirim data admin ke view index
    	return view('permohonan',['permohonan' => $permohonan,'kategori'=>$kategori
        ,'datatotal'=>count($datatotal)
        ,'dataacc'=>count($dataacc)
        ,'dataverivikasi'=>count($dataverivikasi)
        ,'datatolak'=>count($datatolak)]);
    }

    public function tambah()
    {
        $kategori = kategori::all();
        $kegiatan = DB::table('kegiatan')
		->join('kategori','kegiatan.id_kategori','=','kategori.id_kategori')
		->get();
        // mengirim data admin ke view index
    	return view('permohonan_tambah',['kategori'=>$kategori, 'kegiatan'=>$kegiatan]);
    }

    public function tambah1(Request $request)
    {
        $kegiatan= DB::table('kegiatan')->where('id_kategori', $request->id_kategori)->get();
    	return view('permohonan_tambah1',['kegiatan' => $kegiatan]);
    }


    // method untuk insert data ke table users
	public function simpan(Request $request)
	{
        $this->validate($request, [
            'file' => 'required',
        ]);
     
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
     
              // nama file
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';
     
              // ekstensi file
        echo 'File Extension: '.$file->getClientOriginalExtension();
        
        echo '<br>';
     
              // real path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';
     
              // ukuran file
        echo 'File Size: '.$file->getSize();
        echo '<br>';
     
              // tipe mime
        echo 'File Mime Type: '.$file->getMimeType();

        $tujuan_upload = 'lampiran';
        $file->move($tujuan_upload,$file->getClientOriginalName());

        $pointku= $request->id_kegiatan;
        $pointq = DB::table('kegiatan')->where('id_kegiatan',$pointku)->select('point')->get();
        foreach($pointq as $u){
           $point= $u->point;
        }

        //kode otomatis
        $table_no = DB::table('permohonan',config('session.table'))->count();
        //$tasble_no = '0001'; // nantinya menggunakan database dan table sungguhan
        $tgl = substr(str_replace( '-', '', Carbon\carbon::now()), 0,8);
        
        $no= $tgl.$table_no;
        $auto=substr($no,8);
        $auto=intval($auto)+1;
        $auto_number='SKPM/'.substr($no,0,8).'/'.str_repeat(0,(4-strlen($auto))).$auto;

            // insert data ke table users
		DB::table('permohonan')->insert([
            'no_permohonan' => $auto_number,
			'id_kegiatan' => $request->id_kegiatan,
            'nim' => $request->nim,
			'lokasi' => $request->lokasi,
			'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
			'rincian' => $request->rincian,
			'file' => $file->getClientOriginalName(),
            'point' => $point,
		]);
        
        
        
		// alihkan halaman ke halaman pegawai
		return redirect('/permohonan');
	}

    public function proses_upload(Request $request){
       
    }

    // method untuk edit data users
	public function edit($id_permohonan)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$permohonan = DB::table('permohonan')->where('id_permohonan',$id_permohonan)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('permohonan',['permohonan' => $permohonan]);
	}

    // update data pegawai
	public function acc(Request $request)
	{
		$dataku="acc";
        // update data pegawai
		DB::table('permohonan')->where('id_permohonan',$request->id_permohonan)->update ('status_permohonan',$dataku)->get();
		// alihkan halaman ke halaman pegawai
		return redirect('/permohonan');
	}

    // update data pegawai
	public function tolak(Request $request)
	{
		// update data pegawai
		DB::table('permohonan')->where('id_permohonan',$request->id_permohonan)->update('status_permohonan',"tolak")->get();
		// alihkan halaman ke halaman pegawai
		return redirect('/permohonan');
	}
    public function masuk()
    {
        // update data pegawai
		$permohonan=DB::table('permohonan')->where('status_permohonan',"acc")->join('kegiatan','permohonan.id_kegiatan','=','kegiatan.id_kegiatan')->get();
		$kategori = kategori::all();
        $datatotal = DB::table('permohonan')->where('nim','=',Auth::user()->nim)->get();
        $dataacc = DB::table('permohonan')->where('status_permohonan','acc')
                            ->where(Function($query){
                                $query->where('nim','=',Auth::user()->nim);})->get();
        $dataverivikasi = DB::table('permohonan')->where('status_permohonan','verifikasi')
                            ->where(Function($query){
                                $query->where('nim','=',Auth::user()->nim);})->get();
        $datatolak = DB::table('permohonan')->where('status_permohonan','tolak')
                            ->where(Function($query){
                                $query->where('nim','=',Auth::user()->nim);})->get();
       
        // alihkan halaman ke halaman pegawai
		 return view('permohonan',['permohonan' => $permohonan,'kategori'=>$kategori
         ,'datatotal'=>count($datatotal)
         ,'dataacc'=>count($dataacc)
         ,'dataverivikasi'=>count($dataverivikasi)
         ,'datatolak'=>count($datatolak)]);
    }

    public function ditolak()
    {
        // update data pegawai
		$permohonan=DB::table('permohonan')->where('status_permohonan',"tolak")->join('kegiatan','permohonan.id_kegiatan','=','kegiatan.id_kegiatan')->get();
		$kategori = kategori::all();
        $datatotal = DB::table('permohonan')->where('nim','=',Auth::user()->nim)->get();
        $dataacc = DB::table('permohonan')->where('status_permohonan','acc')
                            ->where(Function($query){
                                $query->where('nim','=',Auth::user()->nim);})->get();
        $dataverivikasi = DB::table('permohonan')->where('status_permohonan','verifikasi')
                            ->where(Function($query){
                                $query->where('nim','=',Auth::user()->nim);})->get();
        $datatolak = DB::table('permohonan')->where('status_permohonan','tolak')
                            ->where(Function($query){
                                $query->where('nim','=',Auth::user()->nim);})->get();
       
        // alihkan halaman ke halaman pegawai
		 return view('permohonan',['permohonan' => $permohonan,'kategori'=>$kategori
         ,'datatotal'=>count($datatotal)
         ,'dataacc'=>count($dataacc)
         ,'dataverivikasi'=>count($dataverivikasi)
         ,'datatolak'=>count($datatolak)]);
    }

    public function belumtervalidasi()
    {
        // update data pegawai
		$permohonan=DB::table('permohonan')->where('status_permohonan',"pending")->join('kegiatan','permohonan.id_kegiatan','=','kegiatan.id_kegiatan')->get();
		$kategori = kategori::all();
        $datatotal = DB::table('permohonan')->where('nim','=',Auth::user()->nim)->get();
        $dataacc = DB::table('permohonan')->where('status_permohonan','acc')
                            ->where(Function($query){
                                $query->where('nim','=',Auth::user()->nim);})->get();
        $dataverivikasi = DB::table('permohonan')->where('status_permohonan','pending')
                            ->where(Function($query){
                                $query->where('nim','=',Auth::user()->nim);})->get();
        $datatolak = DB::table('permohonan')->where('status_permohonan','tolak')
                            ->where(Function($query){
                                $query->where('nim','=',Auth::user()->nim);})->get();
       
        // alihkan halaman ke halaman pegawai
		 return view('permohonan',['permohonan' => $permohonan,'kategori'=>$kategori
         ,'datatotal'=>count($datatotal)
         ,'dataacc'=>count($dataacc)
         ,'dataverivikasi'=>count($dataverivikasi)
         ,'datatolak'=>count($datatolak)]);
    }
    
    public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('permohonan')->where('id_permohonan',$id)->delete();
		// alihkan halaman ke halaman pegawai
		return redirect('/permohonan');
	}

    public function cetak_pdf()
    {
    	$mahasiswa = DB::table('mahasiswa')->distinct()->where('mahasiswa.nim','=',Auth::user()->nim)->get();
        $permohonan = DB::table('permohonan')->where('status_permohonan',"acc")
                                             ->join('kegiatan','permohonan.id_kegiatan','=','kegiatan.id_kegiatan')
                                            ->where('nim','=',Auth::user()->nim)->get();
        $datapoint = DB::table('permohonan')->where('status_permohonan',"acc")
                                            ->where(Function($query){
                                                $query->where('nim','=',Auth::user()->nim);})->sum('point');
        $datatotal = DB::table('permohonan')->where('status_permohonan',"acc")->where('nim','=',Auth::user()->nim)->count('point');
        $pejabat1 = DB::table('pejabat')->where('id_pejabat','=',"1")->get();
        $pejabat2 = DB::table('pejabat')->where('id_pejabat','=',"2")->get();
        //$permohodnan = DB::table('mahasiswa')->distinct()->join('permohonan','permohonan.nim','=','mahasiswa.nim')
         //                   ->where('mahasiswa.nim','=',Auth::user()->nim)->get();

    	return view('cetak-pdf',['mahasiswa' => $mahasiswa
        ,'permohonan'=>$permohonan
        ,'datapoint'=>$datapoint
        ,'datatotal'=>$datatotal
        ,'pejabat1'=>$pejabat1
        ,'pejabat2'=>$pejabat2
        ]);
    }


    public function cetak()
	{
		
        $mahasiswa = DB::table('mahasiswa')->distinct()->where('mahasiswa.nim','=',Auth::user()->nim)->get();
        $permohonan = DB::table('permohonan')->where('status_permohonan',"acc")
                                             ->join('kegiatan','permohonan.id_kegiatan','=','kegiatan.id_kegiatan')
                                            ->where('nim','=',Auth::user()->nim)->get();
        $datapoint = DB::table('permohonan')->where('status_permohonan',"acc")
                                            ->where(Function($query){
                                                $query->where('nim','=',Auth::user()->nim);})->sum('point');
        $datatotal = DB::table('permohonan')->where('status_permohonan',"acc")->where('nim','=',Auth::user()->nim)->count('point');
        $pejabat1 = DB::table('pejabat')->where('id_pejabat','=',"1")->get();
        $pejabat2 = DB::table('pejabat')->where('id_pejabat','=',"2")->get();
        //$permohodnan = DB::table('mahasiswa')->distinct()->join('permohonan','permohonan.nim','=','mahasiswa.nim')
         //                   ->where('mahasiswa.nim','=',Auth::user()->nim)->get();

    	return view('cetak',['mahasiswa' => $mahasiswa
        ,'permohonan'=>$permohonan
        ,'datapoint'=>$datapoint
        ,'datatotal'=>$datatotal
        ,'pejabat1'=>$pejabat1
        ,'pejabat2'=>$pejabat2
        ]);
	}
    

    

}
