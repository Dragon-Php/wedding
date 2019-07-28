<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Master\Page;

class PageController extends Controller
{
    private $__req;

    public function __construct(Request $__req)
    {
    	$this->__req = $__req;
    }

    public function index()
    {
        $data['__module'] = 'Page';
        $data['resultData'] = Page::get();
    	return view('admin.page.list', $data);
    }

    public function edit($id)
    {
        $data['__module'] = 'Page';
        $data['editData'] = Page::find($id);
        if(empty($data['editData'])){
            return redirect(route('adminblog'))->with('error', 'Record not found.');
        }

        $data['__module'] = 'Page';
        if($this->__req->isMethod('post')){
            $this->validate($this->__req, [
                'title' => 'required|string',
            ]);
            $insert = $this->__req->except('_token');
            $page = $data['editData']->update($insert);
            if($this->__req->image){
                $image = $this->__req->image;
                $filename = 'Page_'.$data['editData']->id.'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/page');
                $image->move($destinationPath, $filename);
                $data['editData']->update(['image' => 'images/page/'.$filename]);
            }
            return redirect(route('adminpage'))->with('success', 'Record updated successfully.');

        }
        return view('admin.page.edit', $data);
    }

    
}
