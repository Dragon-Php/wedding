<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Master\Setting;

class SettingController extends Controller
{
    private $__req;

    public function __construct(Request $__req)
    {
    	$this->__req = $__req;
    }

    public function index()
    {
        $data['__module'] = 'Setting';
        $setting = Setting::get();

        if($this->__req->isMethod('post')){
        	$insert = $this->__req->except('_token');
        	foreach ($insert as $key => $value) {
        		Setting::where('key', $key)->update(['value'=>$value]);
        	}
        	return redirect(route('setting'));
        }
        foreach ($setting as $set) {
        	$data[$set->key] = $set->value;
        }
        // dd($data);
    	return view('admin.setting', $data);
    }
}
