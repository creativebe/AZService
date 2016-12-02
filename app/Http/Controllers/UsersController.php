<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
	public function __construct(){
		$this->middleware('admin');
	}
	
	public function index()
	{
		$users = User::all();
		return view('users.list_users', compact('users'));
	}
}
