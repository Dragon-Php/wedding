<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Master\Blog;

class BlogController extends Controller
{
    private $__req;

    public function __construct(Request $__req)
    {
    	$this->__req = $__req;
    }

    public function index()
    {
        $data['__module'] = 'Blog';
        $data['resultData'] = Blog::get();
    	return view('admin.blog.list', $data);
    }

    public function create()
    {
        $data['__module'] = 'Blog';
        if($this->__req->isMethod('post')){
            $this->validate($this->__req, [
                'title' => 'required|string',
                'auther' => 'required|string',
                'short_description' => 'required|string',
                'description' => 'required|string',
                'image' => 'required|mimes:jpeg,bmp,png,jpg|max:2048',
            ]);
            $insert = $this->__req->except('_token');
            $insert['is_active'] = '1';
            $blog = Blog::create($insert);
            $last_id = $blog->id;
            if($this->__req->image){
                $image = $this->__req->image;
                $filename = 'Blog_'.$last_id.'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/blog');
                $image->move($destinationPath, $filename);
                $blog->update(['image' => 'images/blog/'.$filename]);
            }
            return redirect(route('adminblog'))->with('success', 'Record saved successfully.');

        }
        
        return view('admin.blog.add', $data);
    }

    public function edit($id)
    {
        $data['__module'] = 'Blog';
        $data['editData'] = Blog::find($id);
        if(empty($data['editData'])){
            return redirect(route('adminblog'))->with('error', 'Record not found.');
        }

        $data['__module'] = 'Blog';
        if($this->__req->isMethod('post')){
            $this->validate($this->__req, [
                'title' => 'required|string',
                'auther' => 'required|string',
                'short_description' => 'required|string',
                'description' => 'required|string',
            ]);
            $insert = $this->__req->except('_token');
            $blog = $data['editData']->update($insert);
            if($this->__req->image){
                $image = $this->__req->image;
                $filename = 'Blog_'.$data['editData']->id.'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/blog');
                $image->move($destinationPath, $filename);
                $blog->update(['image' => 'images/blog/'.$filename]);
            }
            return redirect(route('adminblog'))->with('success', 'Record updated successfully.');

        }
        return view('admin.blog.edit', $data);
    }

    public function delete($id)
    {
        $data['editData'] = Blog::find($id);
        if(!empty($data['editData'])){
            $data['editData']->forceDelete();
            return redirect(route('adminblog'))->with('success', 'Record deleted successfully.');

        } else {
            return redirect(route('adminblog'))->with('error', 'Record not found.');

        }
        
    }
}
