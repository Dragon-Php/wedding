<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;

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

    public function password($value='')
    {
        $data['user'] = Auth()->user();

        if($this->__req->isMethod('post')){

            $this->validate($this->__req,[
                'current_password' => 'required',
                'password' => 'required|confirmed',
            ]);
            if(Hash::check($this->__req->current_password, $data['user']->password)){
                 $data['user']->update(['password'=>bcrypt($this->__req->password)]);
                 return redirect(route('user_password'))->with('success', 'Password has been updated.');
            } else {
                return redirect(route('user_password'))->with('error', 'Invalid current password.');
            }
        }
        return view('user.profile-info', $data);
    }
}
