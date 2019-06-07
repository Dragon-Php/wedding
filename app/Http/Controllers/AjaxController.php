<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AjaxController extends Controller
{
	public  $__req;
    public function __construct(Request $__req)
    {
    	$this->__req  = $__req;
    }

    public function user_reg()
    {
        $user = User::where('email', $this->__req->email)->first();

        if(empty($user)){
            $insert = [
                'name' => $this->__req->name,
                'contact' => $this->__req->contact,
                'email' => $this->__req->email,
                'password' => bcrypt($this->__req->password),
            ];
            if(User::create($insert)){
                echo json_encode(['status'=>'1', 'msg'=>'Thankyou for being our member. Please login.']);
            } else {
                echo json_encode(['status'=>'0', 'msg'=>'Something went wrong please try again.']);
            }
        } else {
            echo json_encode(['status'=>'2', 'msg'=>'This email is already taken']);
        }
        

    }
    public function user_login()
    {
		$credentials = [
		    'email' => $this->__req->email,
		    'password' => $this->__req->password,
    	];
        if(Auth::attempt($credentials)){
            echo json_encode(['status'=>'1', 'msg'=>'Login successfully.']);
        } else {
            echo json_encode(['status'=>'2', 'msg'=>'Invalid credentials.']);
        }
    }
}
