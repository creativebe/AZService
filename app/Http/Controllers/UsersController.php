<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

	public function show(User $user)
	{
		return $user;
	}

	public function edit(Request $request)
	{
		return $request->all();
	}
}
