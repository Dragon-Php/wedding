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

    public function validateForm()
    {
        $this->validate($this->__req, [
            'name' => 'required|string|max:100',
            'iso3' => 'required|string|max:3',
            'iso2' => 'required|string|max:2',
            'countrycode' => 'required|numeric|digits_between:1,10',
            'phonecode' => 'required|string|max:100',
            'capital' => 'required|string|max:100',
            'currency' => 'required|string|max:100',
        ]);
    }

    public function create()
    {
        $data['__module'] = 'Country';
        if($this->__req->isMethod('post')){
            
            $this->validateForm();
            $insert = $this->__req->except('_token');
            $insert['is_active'] = '1';
          
            $country = Country::create($insert);
            return redirect(route('admincountry'))->with('success', 'Record saved successfully.');
        }
        return view('admin.country.add', $data);
    }


    public function edit($id)
    {
        $data['__module'] = 'Country';
        $data['editData'] = Country::find($id);
        if(empty($data['editData'])){
            return redirect(route('admincountry'))->with('error', 'Record not found.');
        }

        if($this->__req->isMethod('post')){
            
            $this->validateForm();
            $insert = $this->__req->except('_token');
            $insert['is_active'] = '1';
          
            $data['editData']->update($insert);
            return redirect(route('admincountry'))->with('success', 'Record updated successfully.');
        }
        return view('admin.country.edit', $data);
    }

    public function delete($id)
    {
        $data['editData'] = Country::find($id);
        if(!empty($data['editData'])){
            $data['editData']->forceDelete();
            return redirect(route('admincountry'))->with('success','Record deleted successfully');
        } else {
            return redirect(route('admincountry'))->with('error', 'Record not found.');

        }
        
    }
}
