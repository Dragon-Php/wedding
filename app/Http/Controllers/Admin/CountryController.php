<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Master\Country;

class CountryController extends Controller
{
    private $__req;

    public function __construct(Request $__req)
    {
    	$this->__req = $__req;
    }

    public function index()
    {
        $data['__module'] = 'Country';
        $data['countries'] = Country::get(['name', 'id']);
    	return view('admin.country.list', $data);
    }

    public function create()
    {
        $data['__module'] = 'Country';
        if($this->__req->isMethod('post')){
            $this->validate($this->__req, [
                'name' => 'required|unique:categories|string',
                
            ]);
            $insert = $this->__req->only(['name']);
            $insert['is_active'] = '1';
            $category = Country::create($insert);
            $last_id = $category->id;
            if($this->__req->image){
                $image = $this->__req->image;
                $filename = 'Category_'.$last_id.'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/category');
                $image->move($destinationPath, $filename);
                $category->update(['image' => 'images/category/'.$filename]);
            }
            if($this->__req->icon){
                $icon = $this->__req->icon;
                $filename = 'Icon_'.$last_id.'.'.$icon->getClientOriginalExtension();
                $destinationPath = public_path('/images/category');
                $icon->move($destinationPath, $filename);
                $category->update(['icon' => 'images/category/'.$filename]);
            }

            if($this->__req->vendor_type){
                $category->vendor_type()->sync($this->__req->vendor_type);
            }

            return redirect(route('admincategory'))->with('success', 'Record saved successfully.');

        }
        $data['category'] = Country::pluck('name', 'id');
        $data['vendortype'] = VendorType::pluck('name', 'id');
        return view('admin.country.add', $data);
    }

    public function edit($id)
    {
        $data['__module'] = 'Country';
        $data['editData'] = Country::find($id);
        if(empty($data['editData'])){
            return redirect(route('admincategory'))->with('error', 'Record not found.');
        }

        $data['selected_vendortypes'] = [];
        $vendortypes = $data['editData']->vendor_type()->get();
        foreach ($vendortypes as $vendortype) {
            $data['selected_vendortypes'][] = $vendortype->id;
        }

        if($this->__req->isMethod('post')){
            // dd($this->__req->all());
            $this->validate($this->__req, [
                'name' => 'required|string',
            ]);
            $insert = $this->__req->only(['name']);
            $insert['slug'] = $this->__req->name;
            if($this->__req->image){
                $image = $this->__req->image;
                $filename = 'Category_'.$id.'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/category');
                $image->move($destinationPath, $filename);
                $insert['image'] = 'images/category/'.$filename;
            }
            if($this->__req->icon){
                $icon = $this->__req->icon;
                $icon_image = 'Icon_'.$id.'.'.$icon->getClientOriginalExtension();
                $destinationPath = public_path('/images/category');
                $icon->move($destinationPath, $icon_image);
                $insert['icon'] =  'images/category/'.$icon_image;
            }
            $data['editData']->update($insert);
            if($this->__req->vendor_type){
                $data['editData']->vendor_type()->sync($this->__req->vendor_type);
            }

            
            return redirect(route('admincategory'))->with('success', 'Record updated successfully.');

        }
        $data['category'] = Country::pluck('name', 'id');
        $data['vendortype'] = VendorType::pluck('name', 'id');
        return view('admin.country.edit', $data);
    }

    public function delete($id)
    {
        $data['editData'] = Country::find($id);
        if(!empty($data['editData'])){
            $data['editData']->forceDelete();
            return redirect(route('admincategory'))->with('success', 'Record deleted successfully.');

        } else {
            return redirect(route('admincategory'))->with('error', 'Record not found.');

        }
        
    }
}
