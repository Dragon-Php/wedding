<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Master\Category;
use App\Master\VendorType;

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
    public function alleventtype($slug)
    {
        $data['categories'] = Category::all();
        $category = Category::where('slug', $slug)->first();
        $data['vendor_types'] = $category->vendor_type()->get();
        $data['category_']  = $category ;
        return view('front.event_type', $data);
    }

    public function allvendors($slug)
    {
        $data['categories'] = Category::all();
        $vendortype = VendorType::where('slug', $slug)->first();
        $data['vendors'] = $vendortype->users()->get();
        // dd($data['vendors']);
        $data['vendortype']  = $vendortype ;
        return view('front.vendors', $data);
    }

    public function vendor_detail($slug)
    {
        $data['categories'] = Category::all();
    	$data['vendor_detail'] = User::where('slug', $slug)->first();
        // dd($vendor_detail);
    	return view('front.vendor-description', $data);
    }
}
