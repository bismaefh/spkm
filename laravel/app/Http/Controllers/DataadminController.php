<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Response;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DataadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = Auth::user()->name;
        //return view('dataadmin', compact('user'));

        // mengambil data dari table admin
    	$admin = DB::table('users')->where('role','admin')->get();
 
    	// mengirim data admin ke view index
    	return view('dataadmin',['admin' => $admin]);
    }

	// method untuk insert data ke table users
	public function store(Request $request)
	{
		DB::table('users')->insert([
			'role' => $request->role,
			'name' => $request->name,
			'email' => $request->email,
			'password' => $request->password,
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('/dataadmin');
	}

	// method untuk insert data ke table users
	public function simpan(Request $request)
	{

		// insert data ke table users
		DB::table('users')->insert([
			'role' => $request->role,
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($request['password']),
		]);
        
		// alihkan halaman ke halaman pegawai
		return redirect('/dataadmin');
	}


    // method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('users')->where('id',$id)->delete();
		// alihkan halaman ke halaman pegawai
		return redirect('/dataadmin');
	}

	 // update data pegawai
	 public function acc($id)
	 {
		 // update data pegawai
		 DB::table('users')->where('id',$id)
		 ->update([
			 'role' =>'admin',
		  ]);
		 // alihkan halaman ke halaman pegawai
		 return redirect('/dataadmin');
		 
	 }
 
	 // update data pegawai
	 public function tolak($id)
	 {
		  // update data pegawai
		 DB::table('users')->where('id',$id)
		 ->update([
			 'role' =>'mahasiswa',
		  ]);
		 // alihkan halaman ke halaman pegawai
		 return redirect('/dataadmin');
		 
	 }
}