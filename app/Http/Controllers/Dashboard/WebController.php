<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
     //Login
    public function login()
    {
        return view('dashboard.login.login');
    }

    //Create account
    public function create()
    {
        return view('dashboard.login.create');
    }

    //Reset ppassword
    public function reset()
    {
        return view('dashboard.login.reset');
    }

    //Home dashboard
    public function home()
    {
        return view('dashboard.adm.home');
    }
}
