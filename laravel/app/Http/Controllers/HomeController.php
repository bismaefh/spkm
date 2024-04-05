<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	$mahasiswa = DB::table('mahasiswa')->where('nim','=',Auth::user()->nim)->get();
        $kemahasiswaan = DB::table('kemahasiswaan')->where('nim','=',Auth::user()->nim)->get();
        $datatotal = DB::table('permohonan')->where('nim','=',Auth::user()->nim)->where('status_permohonan',"acc")->sum('point');

        return view('home',['mahasiswa' => $mahasiswa,'kemahasiswaan' => $kemahasiswaan,'datatotal'=>$datatotal]);
    }
    public function logout(Request $request)
    {
    	Auth::logout();
        return redirect('/login');
    }
}
