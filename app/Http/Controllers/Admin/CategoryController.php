<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    private $__req;

    public function __construct(Request $__req)
    {
    	$this->__req = $__req;
    }

    public function index()
    {
    	return view('admin.category.list');
    }

    public function create()
    {
    	return view('admin.category.add');
    }
}
