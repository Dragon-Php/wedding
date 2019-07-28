<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

use App\Master\Country;
use App\Master\State;
use App\Master\VendorAvailablePlace;
use App\Master\VendorType;

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
                'slug' => substr(strtoupper(str_replace(' ', '', $this->__req->name)), 0, 6).rand(10000, 100000),
            ];

            $user = User::create($insert);
            if($user){
                $user->assignRole('User');
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
                'slug' => substr(strtoupper(str_replace(' ', '', $this->__req->name)), 0, 6).rand(10000, 100000),
            ];
            $vendor = User::create($insert);
            if($vendor){
                $vendor->assignRole('Vendor');
                if($this->__req->vendor_cateory != ''){
                    $category = explode(',', $this->__req->vendor_cateory);
                    $vendor->vendor_type()->sync($category);
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
        $user = User::where('email', $this->__req->email)->first();
        if(!empty($user)){
            if($user->hasRole('User')){
                if(Auth::attempt($credentials)){
                    echo json_encode(['status'=>'1', 'msg'=>'Login successfully.']);
                } else {
                    echo json_encode(['status'=>'2', 'msg'=>'Invalid credentials.']);
                }
            } else {
                echo json_encode(['status'=>'2', 'msg'=>'Authentication failed.']);
            } 
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
        $user = User::where('email', $this->__req->email)->first();
        if(!empty($user)){
            if($user->hasRole('Vendor')){
                if(Auth::guard('vendor')->attempt($credentials)){
                    echo json_encode(['status'=>'1', 'msg'=>'Login successfully.']);
                } else {
                    echo json_encode(['status'=>'2', 'msg'=>'Invalid credentials.']);
                }
            } else {
                echo json_encode(['status'=>'2', 'msg'=>'Authentication failed.']);
            }
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

    public function vendorcity($country)
    {
        echo '<option value="">City</option>';
        $cities = State::whereIn('id', function($query){
            $query->select('state_id')
            ->from('vendor_available_places')
            
            ->groupBy('state_id');
        })->where('country_id', $country)->get();
        if($cities->count() > 0){
            foreach ($cities as $city) {
                echo '<option value="'.$city->id.'">'.$city->name.'</option>';
            }  
        }
    
    }

    public function vendors()
    {
        if(
            $this->__req->category != '' || 
            $this->__req->country != '' || 
            $this->__req->city != ''
        ){

            $query = "select u.* from users as u ";
            if($this->__req->category != ''){

                $query .= "join user_vendor_type as uvt on uvt.user_id = u.id JOIN vendor_types as vt on uvt.vendor_type_id = vt.id JOIN category_vendor_type as cvt ON cvt.vendor_type_id = vt.id JOIN categories as c ON c.id = cvt.category_id ";
            }

            if($this->__req->country != ''){
                $query .= "JOIN vendor_available_places as vap ON vap.vendor_id = u.id ";
            }

            $query .= "where ";

            if($this->__req->category != ''){
                $query .= "c.id = '".$this->__req->category."' and ";
            }

            if($this->__req->country != ''){
                $query .= "vap.country_id = '".$this->__req->country."' and ";
            }
            if($this->__req->city != ''){
                $query .= "vap.state_id = '".$this->__req->city."' ";
            }


            $query = trim($query, "and ") . " GROUP BY u.id";
            $model = new User();
            $data['vendors'] = $model->hydrate(
                \DB::select($query)
            ); 
            return view('front.layouts.vendorlist', $data);
            
        } else {
            if($this->__req->vendor_type == 'All-Vendors'){
                $vendortype = VendorType::where('slug', $this->__req->vendor_type)->first();
                $data['vendors'] = $vendortype->users()->get();
                $data['vendortype']  = $vendortype ;
                return view('front.layouts.vendorlist', $data);
            }
        }
        // print_r($this->__req->all());
    }

    public function allvendors()
    {

        $vendors = User::role('vendor', 'vendor')->where('name', 'like', "{$this->__req->key}%")->get();
        $i = 0;
        foreach ($vendors as $vendor) {
            $profile = $vendor->vendor_profile;
            if($profile != ''){
                $i++;
                echo '<div class="row ven_filter" style="cursor:pointer">
                    <div class="col-md-1"><img src="'.url($profile->banner).'"></div>
                    <div class="col-md-11"> <p data-id="'.$vendor->slug.'">'.$vendor->name.'</p></div>
                </div>';
            }
            
        }
        if($i == 0){
            echo 'no';
        }
    }
}
