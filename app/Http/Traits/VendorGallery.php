<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use App\Master\Country;
use App\Master\VendorType;
use App\Master\Gallery;
use App\Master\UserPortfolio;
use App\Master\VendorAvailablePlace;
use Auth;

trait VendorGallery
{
	public function __construct(Request $__req)
	{
		$this->__req = $__req;
	}
    public function gallery()
    {	
    	$data['user'] = Auth::guard('vendor')->user();
        $data['profile'] = $data['user']->vendor_profile;
    	$data['countries'] = Country::all(['id', 'name']);
        $data['albums'] = Gallery::where('user_id',$data['user']->id)->get(['id','title']);
        $data['vendor_types'] = VendorType::all(['id', 'title']);
        $data['galleries'] = UserPortfolio::orderBy('id', 'desc')->get();
        $data['locations'] = $data['user']->vendor_locations()->get();
    	if($this->__req->isMethod('post')){
    		$this->validate($this->__req, [
    			'vendor_type_id' => 'required|string',
    			'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    		]);

    		$images = $this->__req->images;

    		foreach ($images as $key => $image) {
    			$filename = time().$key.'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/gallery');
                $image->move($destinationPath, $filename);

                $insert = [
                	'user_id' => $data['user']->id,
                	'vendor_type_id' => $this->__req->vendor_type_id,
                	'album_id' => $this->__req->album_id,
                	'image' => 'images/gallery/'.$filename,
                ];

                UserPortfolio::create($insert);
    		}

    		return redirect(route('gallery'));
    		dd($this->__req->all());
    	}
    	return view('vendor.profile-info', $data);
    }

    public function gallery_delete($id)
    {
    	$data['user'] = Auth::guard('vendor')->user();
    	$gallery = UserPortfolio::where('user_id', $data['user']->id)->find($id);
    	if(!empty($gallery)){
    		$gallery->forceDelete();
    	}
    	$galleries = UserPortfolio::orderBy('id', 'desc')->get();
    	return view('vendor.portfolio', compact('galleries'));
    }

    public function vendor_location()
    {
        $data['user'] = Auth::guard('vendor')->user();

        if($this->__req->isMethod('post')){
            $this->validate($this->__req, [
                'country_id' => 'required|numeric',
                'state_id' => 'required|numeric',
                'title' => 'required|max:190',
            ]);

            $insert = $this->__req->except('_token');
            // dd($insert);
            if($data['user']->vendor_locations()->create($insert)){
                return redirect(route('vendor_location'));
            }
        }

        $data['profile'] = $data['user']->vendor_profile;
        $data['countries'] = Country::all(['id', 'name']);
        $data['albums'] = Gallery::where('user_id',$data['user']->id)->get(['id','title']);
        $data['vendor_types'] = VendorType::all(['id', 'title']);
        $data['galleries'] = UserPortfolio::orderBy('id', 'desc')->get();
        $data['locations'] = $data['user']->vendor_locations()->get();

        return view('vendor.profile-info', $data);
    }

    public function location_delete($id)
    {
        $data['user'] = Auth::guard('vendor')->user();
        $location = VendorAvailablePlace::where('vendor_id', $data['user']->id)->find($id);
        if(!empty($location)){
            $location->forceDelete();
        }
        return redirect(route('vendor_location'));
        
    }
    
    
}