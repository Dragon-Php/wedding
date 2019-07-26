<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Master\Country;
use App\Master\Gallery;
use App\Master\VendorType;
use App\Master\UserPortfolio;
use Auth;

use App\Http\Traits\VendorGallery;

class ProfileController extends Controller
{

    use VendorGallery; 

    public $__req;

	public function __construct(Request $__req)
	{
		$this->__req = $__req;
	}
    public function index()
    {	
    	$data = $this->getPageData();
    	if($this->__req->isMethod('post')){
    		$vendor = $this->__req->except('_token');
    		$profile = $data['user']->vendor_profile;
            if(!empty($this->__req->banner)){
                $banner = $this->__req->banner;
                $image = 'Vandor_Profile_'.$data['user']->id.'.'.$banner->getClientOriginalExtension();
                $path = public_path('images/vendor/profile');
                $banner->move($path, $image);
                $vendor['banner'] = 'images/vendor/profile/'.$image;
            }
            
            if(empty($profile)){
                $created = $data['user']->vendor_profile()->create($vendor);
            } else {
                $created = $data['user']->vendor_profile()->update($vendor);
            }
            
    		return redirect(route('vendor_profile'));
    	}
    	return view('vendor.profile-info', $data);
    }

    public function album()
    {	
    	$data = $this->getPageData();
    	if($this->__req->isMethod('post')){
    		$this->validate($this->__req, [
    			'album' => 'required|string'
    		]);
    		$insert = [
    			'title' => $this->__req->album,
    			'user_id' => $data['user']->id,
    		];
    		Gallery::create($insert);

    		return redirect(route('album'));

    	}
    	return view('vendor.profile-info', $data);
    }

    public function getPageData()
    {
        $data['user'] = Auth::guard('vendor')->user();
        $data['profile'] = $data['user']->vendor_profile;
        $data['countries'] = Country::all(['id', 'name']);
        $data['albums'] = Gallery::where('user_id',$data['user']->id)->get(['id','title']);
        $data['vendor_types'] = VendorType::all(['id', 'title']);
        $data['galleries'] = UserPortfolio::orderBy('id', 'desc')->get();
        return $data;
    }

    public function album_delete($id)
    {
    	$album = Gallery::find($id);
    	if(!empty($album)){
    		$album->forceDelete();
    	}
    	return redirect(route('album'));
    }
}
