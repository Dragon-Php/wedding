<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

use App\Master\Country;
use App\Master\State;

class AjaxController extends Controller
{
	public  $__req;
    public function __construct(Request $__req)
    {
    	$this->__req  = $__req;
    }

    public function user_reg()
    {
        $user = User::where('email', $this->__req->email)->first();

        if(empty($user)){
            $insert = [
                'name' => $this->__req->name,
                'contact' => $this->__req->contact,
                'email' => $this->__req->email,
                'password' => bcrypt($this->__req->password),
            ];
            if(User::create($insert)){
                echo json_encode(['status'=>'1', 'msg'=>'Thankyou for being our member. Please login.']);
            } else {
                echo json_encode(['status'=>'0', 'msg'=>'Something went wrong please try again.']);
            }
        } else {
            echo json_encode(['status'=>'2', 'msg'=>'This email is already taken']);
        }
        

    }

    public function vendor_reg()
    {
        $user = User::where('email', $this->__req->email)->first();

        if(empty($user)){
            $insert = [
                'name' => $this->__req->brand_name,
                'city' => $this->__req->vendor_city,
                'contact' => $this->__req->contact,
                'email' => $this->__req->email,
                'password' => bcrypt($this->__req->password),
            ];
            $vendor = User::create($insert);
            if($vendor){
                if($this->__req->vendor_cateory != ''){
                    $category = explode(',', $this->__req->vendor_cateory);
                    $vendor->category()->sync($category);
                }
                echo json_encode(['status'=>'1', 'msg'=>'Thankyou for being our member. Please login.']);
            } else {
                echo json_encode(['status'=>'0', 'msg'=>'Something went wrong please try again.']);
            }
        } else {
            echo json_encode(['status'=>'2', 'msg'=>'This email is already taken']);
        }
        

    }
    public function user_login()
    {
        $credentials = [
            'email' => $this->__req->email,
            'password' => $this->__req->password,
        ];
        if(Auth::attempt($credentials)){
            echo json_encode(['status'=>'1', 'msg'=>'Login successfully.']);
        } else {
            echo json_encode(['status'=>'2', 'msg'=>'Invalid credentials.']);
        }
    }

    public function vendor_login()
    {
		$credentials = [
		    'email' => $this->__req->email,
		    'password' => $this->__req->password,
    	];
        if(Auth::guard('vendor')->attempt($credentials)){
            echo json_encode(['status'=>'1', 'msg'=>'Login successfully.']);
        } else {
            echo json_encode(['status'=>'2', 'msg'=>'Invalid credentials.']);
        }
    }

    public function states($country_id)
    {
        $country = Country::find($country_id);
        echo '<option value="">Select State</option>';
        if(!empty($country)){
            $states = $country->states()->get();
            foreach ($states as $state) {
                echo '<option value="'.$state->id.'">'.$state->name.'</option>';
            }
        }
    }
    public function cities($state_id)
    {
        $state = State::find($state_id);
        echo '<option value="">Select City</option>';
        if(!empty($state)){
            $cities = $state->cities()->get();
            foreach ($cities as $state) {
                echo '<option value="'.$state->id.'">'.$state->name.'</option>';
            }
        }
    }
}
