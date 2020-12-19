<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class worker extends Controller
{
    //
    public function worker(){
        return view('worker.index_worker');
    }
    public function Feedback(){
        return view('worker.Feedback');
    }
    public function office(){
        return view('worker.office');
    }
    public function Presence(){
        return view('worker.Presence');
    }
    public function Report(){
        return view('worker.Report');
    }
    public function shop(){
        return view('worker.shop');
    }




}
