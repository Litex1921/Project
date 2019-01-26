<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
	public function __construct(){
        $this->middleware('admin');
    }
    public function index() {
    	return view('users')->with('users', User::all());
    }

    public function admin($id, $admin) {
    	$user = User::find($id);

    	if($admin > 0) {
    		$user->admin = true;
    	} else {
    		$user->admin = false;
    	}
    	$user->save();
    	return redirect('users');
    }
}
