<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
	public function register(){


		return view('register');
	}

	public function welcome(request $request){

		$fname = $request['fname'];
		$lname = $request['lname'];

		return view('welcome',['fname'=>$fname, 'lname'=>$lname]);
	}

}
