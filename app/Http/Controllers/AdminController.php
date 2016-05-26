<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('role:admin');
	}

    public function delete()
    {
        return 'ini halaman admin untuk delete';
    }

    public function update()
    {
        return 'ini halaman admin untuk update';
    }

    public function admin()
    {
        return view('admin');
    } 
    public function data_member()
    {
        return view('admin.data-member');
    }
    public function konfirm_member()
    {
        return view('admin.konfirm-member');
    }

    public function fasilitas()
    {
        return view('admin.fasilitas.fasilitas');
    }

    public function jadwal()
    {
        return view('admin.pemesanan.jadwal-pesan');
    }

}
