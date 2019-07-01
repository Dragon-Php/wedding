<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Master\Country;
use App\Master\State;

class StateController extends Controller
{
    private $__req;

    public function __construct(Request $__req)
    {
    	$this->__req = $__req;
    }

    public function index()
    {
        $data['__module'] = 'State';
        $data['resultData'] = State::get(['name', 'id', 'country_id']);
    	return view('admin.state.list', $data);
    }

    public function validateForm()
    {
        $this->validate($this->__req, [
            'name' => 'required|string|max:100',
            'country_id' => 'required',
            
        ]);
    }

    public function create()
    {
        $data['__module'] = 'State';
        $data['countries'] = Country::get(['name', 'id']);
        if($this->__req->isMethod('post')){
            $this->validateForm();
            $insert = $this->__req->except('_token');
            $insert['is_active'] = '1';
            $insert['flag'] = $this->__req->country_id;
            $country = State::create($insert);
            return redirect(route('adminstate'))->with('success', 'Record saved successfully.');
        }
        return view('admin.state.add', $data);
    }


    public function edit($id)
    {
        $data['__module'] = 'State';
        $data['editData'] = State::find($id);
        $data['countries'] = Country::get(['name', 'id']);
        if(empty($data['editData'])){
            return redirect(route('adminstate'))->with('error', 'Record not found.');
        }
        if($this->__req->isMethod('post')){
            $this->validateForm();
            $insert = $this->__req->except('_token');
            $data['editData']->update($insert);
            return redirect(route('adminstate'))->with('success', 'Record updated successfully.');
        }
        return view('admin.state.edit', $data);
    }

    public function delete($id)
    {
        $data['editData'] = State::find($id);
        if(!empty($data['editData'])){
            $data['editData']->forceDelete();
            return redirect(route('adminstate'))->with('success','Record deleted successfully');
        } else {
            return redirect(route('adminstate'))->with('error', 'Record not found.');

        }
        
    }
}
