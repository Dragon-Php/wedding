<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use Auth;
use App\User;
trait AdminAuthenticate
{

    function login(){
        $this->validate($this->__req, [
            'username'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        $user = User::where('email', $this->__req->username)->first();
        if($user != ''){
            if($user->hasRole('Admin')){
                if (Auth::guard('admin')->attempt(['email' => $this->__req->username, 'password' => $this->__req->password], $this->__req->get('remember'))) {
                    return redirect()->intended(route('admin_dashboard'));
                } else {
                    return back()->with('error', 'Invalid credentials.');
                }
            } else {
                return back()->with('error', 'Authentication failed.');
            }
        } else {
            return back()->with('error', 'Invalid credentials.');
        }
         

        
    }

    
}