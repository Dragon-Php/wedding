<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ProfileController extends Controller
{
	public $__req;

	public function __construct(Request $__req)
	{
		$this->__req = $__req;
	}
    public function index()
    {	
    	$data['user'] = Auth()->user();
    	return view('user.profile-info', $data);

    }

    public function description()
    {

    	$this->validate($this->__req, [
    		'description' => 'required|string',
    	]);
    	$user = Auth()->user();
    	if(!empty($user->profile)){
    		$user->profile()->update($this->__req->only(['description']));
    		return redirect(route('user_profile'));
    	} else {
    		$user->profile()->create($this->__req->only(['description']));
    		return redirect(route('user_profile'));
    	}
    }
}
