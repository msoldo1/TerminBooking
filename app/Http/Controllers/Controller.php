<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function restricted() {
        return "You are admin..!!";
    }

    public function Logout(){
        Auth::logout();
        return Redirect()->route('login')->with('success','User Logout');
    }

    public function Login(){
        return view('auth.login');
    }

}
