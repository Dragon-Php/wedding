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
        $data['__module'] = 'Category';
        $data['categories'] = Category::get(['title', 'id']);
    	return view('admin.category.list', $data);
    }

    public function create()
    {
        $data['__module'] = 'Category';
        if($this->__req->isMethod('post')){
            $this->validate($this->__req, [
                'title' => 'required|unique:categories|string',
            ]);
            $insert = $this->__req->only(['title']);
            $insert['is_active'] = '1';
            $category = Category::create($insert);
            if($this->__req->vendor_type){
                $category->vendor_type()->sync($this->__req->vendor_type);
            }

            return redirect(route('admincategory'))->with('success', 'Record saved successfully.');

        }
        $data['category'] = Category::pluck('title', 'id');
        $data['vendortype'] = VendorType::pluck('title', 'id');
        return view('admin.category.add', $data);
    }

    public function edit($id)
    {
        $data['__module'] = 'Category';
        $data['editData'] = Category::find($id);
        if(empty($data['editData'])){
            return redirect(route('admincategory'))->with('error', 'Record not found.');
        }

        $data['selected_vendortypes'] = [];
        $vendortypes = $data['editData']->vendor_type()->get();
        foreach ($vendortypes as $vendortype) {
            $data['selected_vendortypes'][] = $vendortype->id;
        }

        if($this->__req->isMethod('post')){
            $this->validate($this->__req, [
                'title' => 'required|string',
            ]);
            $insert = $this->__req->only(['title']);
            $data['editData']->update($insert);
            if($this->__req->vendor_type){
                $data['editData']->vendor_type()->sync($this->__req->vendor_type);
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
