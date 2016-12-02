<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class Customer extends Controller
{
    public function index()
    {
    	$customer = Customer::all();
    }
}
