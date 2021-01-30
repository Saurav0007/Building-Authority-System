<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userinfo = Auth::user();
        $userType= $userinfo->userType;
        if($userType==1){
            return redirect('/admin');
        }
        if($userType==2){
          return redirect('/worker');
        }
        if($userType==3){
            return redirect('/public');
        }
        if ($userType==4){
            return redirect('/employee');
        }

    }
}
