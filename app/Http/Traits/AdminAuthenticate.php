<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use Auth;
trait AdminAuthenticate
{

    function login(){
        // dd($this->__req->all());
        $this->validate($this->__req, [
            'username'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $this->__req->username, 'password' => $this->__req->password], $this->__req->get('remember'))) {

            return redirect()->intended(route('admin_dashboard'));
        }
    }

    
}