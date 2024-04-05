<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Migrate\Migrate;
use PDF;
use Illuminate\Contracts\Container\BindingResolutionException;


use App\Models\Kategori;
class DatapejabatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pejabat = DB::table('pejabat')->get();
    	// mengirim data admin ke view index
    	return view('datapejabat',['pejabat' => $pejabat]);
    }

    // method untuk edit data users
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pejabat = DB::table('pejabat')->where('id_pejabat',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('datapejabat_edit',['pejabat' => $pejabat]);
	}

    // update data pegawai
	public function rubah(Request $request)
	{
		// update data pegawai
		DB::table('pejabat')->where('id_pejabat',$request->id)->update([
			'nama' => $request->nama,
			'nip' => $request->nip,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/datapejabat');
	}


    

}
