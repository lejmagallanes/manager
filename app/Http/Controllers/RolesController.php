<?php

namespace App\Http\Controllers;
use App\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		// dd(Role::class);
		$role = \Auth::user()->role;
		return view($role.'.index');
	}
}
