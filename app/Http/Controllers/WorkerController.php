<?php

namespace App\Http\Controllers;

use App\Shop\Office;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    //
    public function worker(){
        return view('worker.index_worker');
    }
    public function Feedback(){
        return view('worker.Feedback');
    }
    public function office(){
        $WorkerOffice=Office::all();
        return view('worker.office',compact('WorkerOffice'));
    }
    public function Presence(){
        return view('worker.Presence');
    }
    public function Report(){
        return view('worker.Report');
    }
    public function shop(){
        $WorkerShop=Office::all();
        return view('worker.shop',compact('WorkerShop'));
    }
}
