<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Master\Review;

class ReviewController extends Controller
{
	public $__req;

	public function __construct(Request $__req)
	{
		$this->__req = $__req;
	}
    public function index()
    {
    	$user = Auth::user();
    	if($this->__req->isMethod('post')){
    		$this->validate($this->__req, [
    			'rate' => 'required',
    			'vendor_id' => 'required',
    			'photo' => 'required|mimes:jpg,png,gif,jpeg',
    			'amount' => 'required|numeric',
    			'description' => 'required'
    		],[
    			'rate.required' => 'Rate Vendor is required.',
    			'vendor_id.required' => 'Please enter valid vendor name.',
    			'photo.required' => 'Please upload photo.',
    			'amount.required' => 'Please enter amount.',
    			'description.required' => 'Please enter your experience.',
    		]);

    		$vendor = User::where('slug', $this->__req->vendor_id)->first();
    		if(empty($vendor)){
    			return redirect(route('write-review'))->with('error', 'Please enter valid vendor.');
    		}

    		$is_exist = Review::where(['vendor_id' => $vendor->id,'user_id' => $user->id])->first();
    		if(!empty($is_exist)){
    			return redirect(route('write-review'))->with('error', 'Review is already given.');
    		}

    		$insert = [
    			'vendor_id' => $vendor->id,
    			'user_id' => $user->id,
    			'description' =>  $this->__req->description,
    			'amount' =>  $this->__req->amount,
    			'rating' =>  $this->__req->rate
    		];

    		$rev = Review::create($insert);
    		if($rev){
    			$last_id = $rev->id;
	    		if($this->__req->photo){
	    			$photo = $this->__req->photo;
	                $filename = 'Review_'.$last_id.'.'.$photo->getClientOriginalExtension();
	                $destinationPath = public_path('/images/review');
	                $photo->move($destinationPath, $filename);
	                $rev->update(['image' => 'images/review/'.$filename]);
	    		}
	    		return redirect(route('write-review'))->with('success', 'Review added successfully.');
    		} else {
    			return redirect(route('write-review'))->with('error', 'Something went wrong.');
    		}
    		
    		
    	}
    	return view('front.write-review');
    }
}
