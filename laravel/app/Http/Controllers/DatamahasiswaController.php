<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Migrate\Migrate;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Contracts\Container\BindingResolutionException;

class DatamahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = Auth::user()->name;
        //return view('datamahasiswa', compact('user'));

        // mengambil data dari table mahasiswa
    	$mahasiswa = DB::table('mahasiswa')->get();
 
    	// mengirim data mahasiswa ke view index
    	return view('datamahasiswa',['mahasiswa' => $mahasiswa]);
    }

    
    // method untuk insert data ke table users
	public function store(Request $request)
	{
		// insert data ke table users
		DB::table('mahasiswa')->insert([
			'nim' => $request->nim,
			'name' => $request->name,
			'angkatan' => $request->angkatan,
			'jurusan' => $request->jurusan,
			'email' => $request->email,
			'jenis_kelamin' => $request->jenis_kelamin,
			'telp' => $request->telp,
			'tgl_lahir' => $request->tgl_lahir,
			'alamat' => $request->alamat,
		]);
		DB::table('users')->insert([
			'name' => $request->name,
			'email' => $request->email,
			'password' => $request->password,
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('/datamahasiswa');
	}

	// method untuk insert data ke table users
	public function simpan(Request $request)
	{
        $this->validate($request, [
            'profile' => 'required',
        ]);
     
        // menyimpan data file yang diupload ke variabel $profile
        $profile = $request->file('profile');
     
              // nama file
        echo 'File Name: '.$profile->getClientOriginalName();
        echo '<br>';
     
              // ekstensi file
        echo 'File Extension: '.$profile->getClientOriginalExtension();
        
        echo '<br>';
     
              // real path
        echo 'File Real Path: '.$profile->getRealPath();
        echo '<br>';
     
              // ukuran file
        echo 'File Size: '.$profile->getSize();
        echo '<br>';
     
              // tipe mime
        echo 'File Mime Type: '.$profile->getMimeType();
        
              // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'profile';
        $profile->move($tujuan_upload,$profile->getClientOriginalName());

		// insert data ke table users
		DB::table('mahasiswa')->insert([
			'nim' => $request->nim,
		'name' => $request->name,
		'angkatan' => $request->angkatan,
		'jurusan' => $request->jurusan,
		'email' => $request->email,
		'jenis_kelamin' => $request->jenis_kelamin,
		'telp' => $request->telp,
		'tgl_lahir' => $request->tgl_lahir,
		'alamat' => $request->alamat,
		'profile' => $profile->getClientOriginalName(),
		]);
		
		
		DB::table('users')->insert([
			'nim' => $request->nim,
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($request['password']),
		]);
        
		// alihkan halaman ke halaman pegawai
		return redirect('/datamahasiswa');
	}

    // method untuk edit data users
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('nim',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('datamahasiswa_edit',['mahasiswa' => $mahasiswa]);
	}

    // update data pegawai
	public function rubah(Request $request)
	{
		// update data pegawai
		DB::table('mahasiswa')->where('nim',$request->nim)->update([
			'nim' => $request->nim,
			'name' => $request->name,
			'angkatan' => $request->angkatan,
			'jurusan' => $request->jurusan,
			'email' => $request->email,
			'jenis_kelamin' => $request->jenis_kelamin,
			'telp' => $request->telp,
			'tgl_lahir' => $request->tgl_lahir,
			'alamat' => $request->alamat,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/datamahasiswa');
	}

    // method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('mahasiswa')->where('nim',$id)->delete();
		DB::table('users')->where('nim',$id)->delete();
		// alihkan halaman ke halaman pegawai
		return redirect('/datamahasiswa');
	}
}