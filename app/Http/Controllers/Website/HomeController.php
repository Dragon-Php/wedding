<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Master\Category;

class HomeController extends Controller
{
    public function index()
    {
    	$data['categories'] = Category::all();
    	return view('front.home', $data);
    }
    public function categories()
    {
    	$data['categories'] = Category::all();
    	return view('front.category', $data);
    }
}
