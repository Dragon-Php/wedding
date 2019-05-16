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
        
        $data['resultData'] = VendorType::get(['title', 'id']);
    	return view('admin.vendor_type.list', $data);
    }

    public function create()
    {

        if($this->__req->isMethod('post')){
            $this->validate($this->__req, [
                'title' => 'required|unique:vendor_types|string',
            ]);
            $insert = $this->__req->only(['title']);
            $insert['is_active'] = '1';
            $insert['slug'] = $this->__req->title;
            VendorType::create($insert);
            if(!$this->__req->vendor_type){

            }

            return redirect(route('adminvendortype'))->with('success', 'Record saved successfully.');

        }
        $data['category'] = Category::pluck('title', 'id');
        $data['vendortype'] = VendorType::pluck('title', 'id');
        return view('admin.vendor_type.add', $data);
    }

    public function edit($id)
    {
        $data['editData'] = VendorType::find($id);
        if(empty($data['editData'])){
            return redirect(route('adminvendortype'))->with('error', 'Record not found.');
        }

        if($this->__req->isMethod('post')){
            $this->validate($this->__req, [
                'title' => 'required|unique:vendor_types|string',
            ]);
            $insert = $this->__req->only(['title']);
            $data['editData']->update($insert);
            if(!$this->__req->vendor_type){

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
