<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class PrivilegeController extends Controller
{
	public function __construct(){
		$this->middleware('admin');
	}

    public function index()
    {
    	$roles = Role::all();
    	return view('privilege.manage', compact('roles'));
    }
}
