<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    public function getRegister()
    {
    	return view('auth.register');
    }

    public function postRegister()
    {
    	$user = new User();
    	$user->nama = Input::get('nama');
        $user->tempat_lahir = Input::get('tempat_lahir');
        $user->tanggal_lahir = Input::get('tanggal_lahir');
        $user->jenis_kelamin = Input::get('jenis_kelamin');
        $user->alamat = Input::get('alamat');
        $user->email = Input::get('email');
        $user->password = bcrypt(Input::get('password'));
        $user->no_telp = Input::get('no_telp');
        $user->roles_id = DB::table('roles')->select('id')->where('namaRole','user')->first(); 

        $user->save();
        return back()->withInput();
    }
    
}
