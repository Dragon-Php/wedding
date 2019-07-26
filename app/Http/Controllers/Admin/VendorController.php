<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Master\VendorType;
use App\Master\Country;
use App\Master\State;
use App\Master\City;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class VendorController extends Controller
{
    private $__req;

    public function __construct(Request $__req)
    {
    	$this->__req = $__req;
    }

    public function index()
    {

        $data['__module'] = 'Vendor Type';
        $data['resultData'] = User::role('Vendor', 'vendor')->withAllStatus()->get();
        // dd($data['resultData']);
    	return view('admin.vendor.list', $data);
    }

    public function create()
    {
        $data['__module'] = 'Vendor Type';
        if($this->__req->isMethod('post')){
        	
            $this->validate($this->__req, [
                'title' => 'required|string',
                'contact' => 'required|string',
                'email' => 'required|string|email|unique:users',
                'password' => 'required|string',
                'country_id' => 'required|numeric',
                'state_id' => 'required|numeric',
                'address' => 'required|string',
                'description' => 'required|string',
                'image' => 'required|mimes:jpg,png,gif,jpeg',
                'vendortype.*' => 'required',
            ]);
            $insert = [
            	'name' => $this->__req->title,
            	'contact' => $this->__req->contact,
            	'email' => $this->__req->email,
            	'password' => bcrypt($this->__req->password),
            	'slug' => substr(strtoupper(str_replace(' ', '', $this->__req->title)), 0, 6).rand(10000, 100000),
            	'is_active'=> 1,
            ];
            $role = Role::findByName('Vendor', 'vendor');
            $vendor = User::create($insert);
            if($vendor){
                $vendor->assignRole($role);
                if(!empty($this->__req->vendortype)){
                    $category = $this->__req->vendortype;
                    $vendor->vendor_type()->sync($category);
                }

                $profile = [
                	'country_id' => $this->__req->country_id,
                	'state_id' => $this->__req->state_id,
                	'city_id' => $this->__req->city_id,
                	'address' => $this->__req->address,
                	'description' => $this->__req->description,
                ];
	            if(!empty($this->__req->image)){
	                $banner = $this->__req->image;
	                $image = 'Vandor_Profile_'.$vendor->id.'.'.$banner->getClientOriginalExtension();
	                $path = public_path('images/vendor/profile');
	                $banner->move($path, $image);
	                $profile['banner'] = 'images/vendor/profile/'.$image;
	            }

	            $vendor->vendor_profile()->create($profile);

	            return redirect(route('adminvendor'))->with('success', 'Record saved successfully.');
            } else {
                return redirect(route('adminvendor'))->with('error', 'Somothng went wrong.');
            }
        }
        $data['country'] = Country::pluck('name', 'id');
        $data['vendortype'] = VendorType::pluck('title', 'id');
        return view('admin.vendor.add', $data);
    }

    public function edit($id)
    {
        $data['__module'] = 'Vendor Type';
        $data['editData'] = User::withAllStatus()->find($id);
        if(empty($data['editData'])){
            return redirect(route('adminvendor'))->with('error', 'Record not found.');
        }

        $data['selected_categories'] = [];
        $categories = $data['editData']->vendor_type()->get();
        foreach ($categories as $vendortype) {
            $data['selected_categories'][] = $vendortype->id;
        }

        $vendor = $data['editData']->vendor_profile;

        if($this->__req->isMethod('post')){
        	
            $this->validate($this->__req, [
                'title' => 'required|string',
                'contact' => 'required|string',
                'email' => 'required|string|email|unique:users,email,'.$data['editData']->id,
                'country_id' => 'required|numeric',
                'state_id' => 'required|numeric',
                'address' => 'required|string',
                'description' => 'required|string',
                'vendortype.*' => 'required',
            ]);
            $insert = [
            	'name' => $this->__req->title,
            	'contact' => $this->__req->contact,
            	'email' => $this->__req->email,
            ];
            if(!empty($this->__req->password)){
            	$insert['password'] = bcrypt($this->__req->password);
            }
            
            ;

            if($data['editData']->update($insert)){
                
            	if(!empty($this->__req->vendortype)){
	                $category = $this->__req->vendortype;
	                $data['editData']->vendor_type()->sync($category);
	            }
	            
	            $profile = [
	            	'country_id' => $this->__req->country_id,
	            	'state_id' => $this->__req->state_id,
	            	'city_id' => $this->__req->city_id,
	            	'address' => $this->__req->address,
	            	'description' => $this->__req->description,
	            ];
	            if(!empty($this->__req->image)){
	                $banner = $this->__req->image;
	                $image = 'Vandor_Profile_'.$vendor->id.'.'.$banner->getClientOriginalExtension();
	                $path = public_path('images/vendor/profile');
	                $banner->move($path, $image);
	                $profile['banner'] = 'images/vendor/profile/'.$image;
	            }

	            if($vendor != ''){
	            	$data['editData']->vendor_profile()->update($profile);
	            } else {
	            	$data['editData']->vendor_profile()->create($profile);
	            }

	            return redirect(route('adminvendor'))->with('success', 'Record saved successfully.');
            } else {
                return redirect(route('adminvendor'))->with('error', 'Somothng went wrong.');
            }
        }


        $data['state'] = $data['city'] = [];
        $data['country'] = Country::pluck('name', 'id');
        if($vendor != ''){
        	$data['state'] = State::where('country_id', $vendor->country_id)->pluck('name', 'id');
        	$data['city'] = City::where('state_id', $vendor->state_id)->pluck('name', 'id');
        }
        
        $data['vendortype'] = VendorType::pluck('title', 'id');
        return view('admin.vendor.edit', $data);
    }

    public function delete($id)
    {
        $data['editData'] = User::withAllStatus()->find($id);
        if(!empty($data['editData'])){
            $data['editData']->forceDelete();
            return redirect(route('adminvendor'))->with('success', 'Record deleted successfully.');

        } else {
            return redirect(route('adminvendor'))->with('error', 'Record not found.');

        }
        
    }
    public function status($id)
    {
        $data['editData'] = User::withAllStatus()->find($id);
        if(!empty($data['editData'])){
        	$status = $data['editData']->is_active == '1' ? '0':'1';
            $data['editData']->update(['is_active'=>$status]);
            return redirect(route('adminvendor'))->with('success', 'Record updated successfully.');

        } else {
            return redirect(route('adminvendor'))->with('error', 'Record not found.');

        }
        
    }
}
