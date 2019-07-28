<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Master\Category;
use App\Master\Country;
use App\Master\VendorType;

class HomeController extends Controller
{
    public function index()
    {
    	$data['categories'] = $this->getCategories();
        $data['page_content'] = \App\Master\Page::where('id', '1')->first();
    	return view('front.home', $data);
    }
    public function categories()
    {
        $data['countries'] = $this->getVendorCountry();
        $data['categories'] = $this->getCategories();
        return view('front.category', $data);
    }
    public function alleventtype($slug)
    {
        $data['countries'] = $this->getVendorCountry();
        $data['categories'] = $this->getCategories();
        $category = Category::where('slug', $slug)->first();
        $data['vendor_types'] = $category->vendor_type()->get();
        $data['category_']  = $category ;
        return view('front.event_type', $data);
    }

    public function allvendors($slug)
    {
        $data['countries'] = $this->getVendorCountry();
        $data['categories'] = $this->getCategories();
        $vendortype = VendorType::where('slug', $slug)->first();
        $data['vendors'] = $vendortype->users()->get();
        // dd($data['vendors']);
        $data['vendortype']  = $vendortype ;
        return view('front.vendors', $data);
    }

    public function vendor_detail($slug)
    {
        $data['categories'] = $this->getCategories();
    	$data['vendor_detail'] = User::where('slug', $slug)->first();
        // dd($vendor_detail);
    	return view('front.vendor-description', $data);
    }

    public function getCategories()
    {
        $model = new Category();
        return $model->hydrate(
            \DB::select('call getvendorcategory()')
        );
    }

    public function getVendorCountry()
    {
        return Country::whereIn('id', function($query){
            $query->select('country_id')
            ->from('vendor_available_places')
            ->groupBy('country_id');
        })->get();
    }
}
