<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Master\Country;
use Auth;

class ProfileController extends Controller
{
    public $__req;

	public function __construct(Request $__req)
	{
		$this->__req = $__req;
	}
    public function index()
    {	
    	$data['user'] = Auth::guard('vendor')->user();
    	$data['countries'] = Country::all(['id', 'name']);
    	if($this->__req->isMethod('post')){
    		$vendor = $this->__req->except('_token');
    		$profile = $data['user']->vendor_profile;
    		if(empty($profile)){
    			$data['user']->vendor_profile()->create($vendor);
    		} else {
    			$data['user']->vendor_profile()->update($vendor);
    		}
    		return redirect(route('vendor_profile'));
    	}
    	return view('vendor.profile-info', $data);
    }

    public function album()
    {	
    	$data['user'] = Auth::guard('vendor')->user();
    	$data['countries'] = Country::all(['id', 'name']);
    	if($this->__req->isMethod('post')){
    		$vendor = $this->__req->except('_token');
    		$profile = $data['user']->vendor_profile;
    		if(empty($profile)){
    			$data['user']->vendor_profile()->create($vendor);
    		} else {
    			$data['user']->vendor_profile()->update($vendor);
    		}
    		return redirect(route('vendor_profile'));
    	}
    	return view('vendor.profile-info', $data);
    }
}
