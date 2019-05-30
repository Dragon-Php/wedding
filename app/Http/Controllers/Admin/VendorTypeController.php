<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Master\Category;
use App\Master\VendorType;

class VendorTypeController extends Controller
{
    private $__req;

    public function __construct(Request $__req)
    {
    	$this->__req = $__req;
    }

    public function index()
    {
        $data['__module'] = 'Vendor Type';
        $data['resultData'] = VendorType::get(['title', 'id', 'image']);
    	return view('admin.vendor_type.list', $data);
    }

    public function create()
    {
        $data['__module'] = 'Vendor Type';
        if($this->__req->isMethod('post')){
            $this->validate($this->__req, [
                'title' => 'required|unique:vendor_types|string',
            ]);
            $insert = $this->__req->only(['title']);
            $insert['is_active'] = '1';
            $insert['slug'] = $this->__req->title;
            $vendor_type = VendorType::create($insert);
            $last_id = $vendor_type->id;
            if($this->__req->image){
                $image = $this->__req->image;
                $filename = 'VendorType_'.$last_id.'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/vendor_type');
                $image->move($destinationPath, $filename);
                $vendor_type->update(['image' => 'images/vendor_type/'.$filename]);
            }


            if($this->__req->category){
                $vendor_type->category()->sync($this->__req->category);
            }
            return redirect(route('adminvendortype'))->with('success', 'Record saved successfully.');

        }
        $data['category'] = Category::pluck('title', 'id');
        $data['vendortype'] = VendorType::pluck('title', 'id');
        return view('admin.vendor_type.add', $data);
    }

    public function edit($id)
    {
        $data['__module'] = 'Vendor Type';
        $data['editData'] = VendorType::find($id);
        if(empty($data['editData'])){
            return redirect(route('adminvendortype'))->with('error', 'Record not found.');
        }

        $data['selected_categories'] = [];
        $categories = $data['editData']->category()->get();
        foreach ($categories as $vendortype) {
            $data['selected_categories'][] = $vendortype->id;
        }

        if($this->__req->isMethod('post')){
            $this->validate($this->__req, [
                'title' => 'required|string',
            ]);
            $insert = $this->__req->only(['title']);
            if($this->__req->image){
                $image = $this->__req->image;
                $filename = 'VendorType_'.$id.'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/category');
                $image->move($destinationPath, $filename);
                $insert['image'] = 'images/category/'.$filename;
            }
            $data['editData']->update($insert);


            if($this->__req->category){
                $data['editData']->category()->sync($this->__req->category);
            }
            return redirect(route('adminvendortype'))->with('success', 'Record updated successfully.');

        }
        $data['category'] = Category::pluck('title', 'id');
        $data['vendortype'] = VendorType::pluck('title', 'id');
        return view('admin.vendor_type.edit', $data);
    }

    public function delete($id)
    {
        $data['editData'] = VendorType::find($id);
        if(!empty($data['editData'])){
            $data['editData']->forceDelete();
            return redirect(route('adminvendortype'))->with('success', 'Record deleted successfully.');

        } else {
            return redirect(route('adminvendortype'))->with('error', 'Record not found.');

        }
        
    }
}
