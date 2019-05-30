<?php

namespace App\Http\Controllers;

use App\Http\Traits\AdminAuthenticate;
use Illuminate\Http\Request;


class AdminLoginController extends Controller
{
	use AdminAuthenticate;

	public $__req;

	public function __construct(Request $__req)
	{
		$this->__req = $__req;

		$this->middleware('guest:admin')->except('logout');
	}

    public function index()
    {
    	return view('admin.login');
    }
}
