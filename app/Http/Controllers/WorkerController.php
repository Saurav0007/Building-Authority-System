<?php

namespace App\Http\Controllers;

use App\CheckinPublic;
use App\checkOutPublic;
use App\publicReportFeedback;
use App\Shop\Office;
use App\wokerReport;
use App\workeDestination;
use App\workerCheckIn;
use App\workerCheckOut;
use App\workerLogin;
use App\workerReportFeedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkerController extends Controller
{
    //
    public function worker(){
        return view('worker.index_worker');
    }
    public function Feedback(){
        $AF=workerReportFeedback::all();
        $WF=wokerReport::all();
        return view('worker.Feedback',compact('WF','AF'));
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
    public function workerlogin(){
        return view('worker.workerlogin');
    }
    public function shop(){
        $WorkerShop=Office::all();
        return view('worker.shop',compact('WorkerShop'));
    }
    public function workerCheckin(Request $request)
    {
        $userinfo = Auth::user();
        $userType = $userinfo->id;
        $userEmail = $userinfo->email;
        $workerCheck= new workerCheckIn();
        $workerCheck->workerCheckInID=$userType;
        $workerCheck->workerCheckInEmail=$userEmail;
        $workerCheck->save();
        return redirect('/worker');
    }
    public function workerCheckOut(Request $request){
        $userinfo = Auth::user();
        $userType = $userinfo->id;
        $userEmail = $userinfo->email;
        $publicCheck= new workerCheckOut();
        $publicCheck->workerCheckOutId=$userType;
        $publicCheck->workerCheckOutEmail=$userEmail;
        $publicCheck->save();
        return redirect('/worker');
    }
    public function workerDestination(){
        $userinfo = Auth::user();
        $userType = $userinfo->id;
        $userEmail = $userinfo->email;
        $workerDestination= new workeDestination();
        $workerDestination->workerId=$userType;
        $workerDestination->workerEmail=$userEmail;
        $workerDestination->save();
        return redirect('/Workershop');
    }



}
