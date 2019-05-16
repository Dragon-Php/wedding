<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Master\Category;
use App\Master\VendorType;

class CategoryController extends Controller
{
    private $__req;

    public function __construct(Request $__req)
    {
    	$this->__req = $__req;
    }

    public function index()
    {
        
        $data['categories'] = Category::get(['title', 'id']);
    	return view('admin.category.list', $data);
    }

    public function create()
    {

        if($this->__req->isMethod('post')){
            $this->validate($this->__req, [
                'title' => 'required|unique:categories|string',
            ]);
            $insert = $this->__req->only(['title']);
            $insert['is_active'] = '1';
            Category::create($insert);
            if(!$this->__req->vendor_type){

            }

            return redirect(route('admincategory'))->with('success', 'Record saved successfully.');

        }
        $data['category'] = Category::pluck('title', 'id');
        $data['vendortype'] = VendorType::pluck('title', 'id');
        return view('admin.category.add', $data);
    }

    public function edit($id)
    {
        $data['editData'] = Category::find($id);
        if(empty($data['editData'])){
            return redirect(route('admincategory'))->with('error', 'Record not found.');
        }

        if($this->__req->isMethod('post')){
            $this->validate($this->__req, [
                'title' => 'required|unique:categories|string',
            ]);
            $insert = $this->__req->only(['title']);
            $data['editData']->update($insert);
            if(!$this->__req->vendor_type){

            }
            return redirect(route('admincategory'))->with('success', 'Record updated successfully.');

        }
        $data['category'] = Category::pluck('title', 'id');
        $data['vendortype'] = VendorType::pluck('title', 'id');
        return view('admin.category.edit', $data);
    }

    public function delete($id)
    {
        $data['editData'] = Category::find($id);
        if(!empty($data['editData'])){
            $data['editData']->forceDelete();
            return redirect(route('admincategory'))->with('success', 'Record deleted successfully.');

        } else {
            return redirect(route('admincategory'))->with('error', 'Record not found.');

        }
        
    }
}
