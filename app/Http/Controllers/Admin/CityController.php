<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Master\Country;
use App\Master\State;
use App\Master\City;

class CityController extends Controller
{
    private $__req;

    public function __construct(Request $__req)
    {
    	$this->__req = $__req;
    }

    public function index()
    {
        $data['__module'] = 'City';
        $data['resultData'] = City::where('country_id', '1')->get(['name', 'id', 'country_id', 'state_id']);
    	return view('admin.city.list', $data);
    }

    public function validateForm()
    {
        $this->validate($this->__req, [
            'name' => 'required|string|max:100',
            'state_id' => 'required',
            'country_id' => 'required',
            
        ]);
    }

    public function create()
    {
        $data['__module'] = 'City';
        $data['countries'] = Country::get(['name', 'id']);
        if($this->__req->isMethod('post')){

            $this->validateForm();
            $insert = $this->__req->except('_token');
            $insert['is_active'] = '1';
            $insert['flag'] = $this->__req->country_id;
            $country = City::create($insert);
            return redirect(route('admincity'))->with('success', 'Record saved successfully.');
        }
        return view('admin.city.add', $data);
    }


    public function edit($id)
    {
        $data['__module'] = 'City';
        $data['editData'] = City::find($id);
        $data['countries'] = Country::get(['name', 'id']);
        $data['states'] = State::where('country_id', $data['editData']->country_id)->get(['name', 'id']);
        if(empty($data['editData'])){
            return redirect(route('admincity'))->with('error', 'Record not found.');
        }
        if($this->__req->isMethod('post')){
            $this->validateForm();
            $insert = $this->__req->except('_token');
            $data['editData']->update($insert);
            return redirect(route('admincity'))->with('success', 'Record updated successfully.');
        }
        return view('admin.city.edit', $data);
    }

    public function delete($id)
    {
        $data['editData'] = City::find($id);
        if(!empty($data['editData'])){
            $data['editData']->forceDelete();
            return redirect(route('admincity'))->with('success','Record deleted successfully');
        } else {
            return redirect(route('admincity'))->with('error', 'Record not found.');

        }
        
    }
}
