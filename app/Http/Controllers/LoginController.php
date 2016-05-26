<?php

namespace App\Http\Controllers;

use App\User;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function getLogin()
    {
        return view('auth.login'); 
    }

    public function postLogin(Request $Request)
    {
        if(Auth::attempt([
        	'email' => $Request->email,
        	'password' => $Request->password,
            'roles_id' => '2',

        ])){
        	return redirect('admin');

    	}elseif(Auth::attempt([
            'email' => $Request->email,
            'password' => $Request->password,
            'roles_id' => '1',

        ])){
            return redirect('user');

        }

    	else{
    		return 'data yang dimasukkan salah';
    	}
	}

}
