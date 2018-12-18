<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Fakeuser;

class fakeController extends Controller
{
    public function storefake(Request $request){
    	$salt = str_random(16);

    	$username = $request['UserName'];
    	$password = Hash::make($request['Password'] . $salt);
    	$fakeuser = new Fakeuser;
    	$fakeuser['email'] = $username;
    	$fakeuser['password'] = $password;
    	$fakeuser->save();
    	return view('tricked')->with('email', $username)->with('password', $password);
    }
}
