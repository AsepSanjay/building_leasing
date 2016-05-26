<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\fasilitas as fasilitas;
use App;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:user');
    }

    public function user()
    {
        return view('user ');
    }

    public function pesan()
    {
        $data = fasilitas::all();
        return view('user.memesan')->with('data', $data);
    }

    public function statusPesan()
    {
        return view('user.status-pesan');
    }

    public function akun()
    {
        return view('user.akun');
    }

    public function riwayatPesan()
    {
        return view('user.riwayat-pesan');
    }

    public function cekfasilitas(Request $req){

        $fasilitas = \App\fasilitas::where('id',$req->input('id'))->get();
        return $fasilitas[0]->harga_fasilitas;
    }

}
    
