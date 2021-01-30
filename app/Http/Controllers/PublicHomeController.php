<?php

namespace App\Http\Controllers;

use App\adminReportFeedback;
use App\CheckinPublic;
use App\checkOutPublic;
use App\permissionCheck;
use App\publiclogin;
use App\publicReport;
use App\Shop\Office;
use App\visitReason;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class PublicHomeController extends Controller
{
    //
    public function public()
    {
        return view('public.index_public');
    }

    public function askPermission()
    {
        $Ask = Office::all();
        return view('public.askpermission', compact('Ask'));
    }

    public function public_feedback()
    {
        $p=0;
        $FD=adminReportFeedback::all();
        $PD=publicReport::all();
        return view('public.PublicFeedback',compact('FD','p','PD'));
    }

    public function publiclogin()
    {
        return view('public.Publiclogin');
    }

    public function public_office()
    {
        $publicOffice = Office::all();
        return view('public.Publicoffice', compact('publicOffice'));
    }

    public function public_shop()
    {
        $publicShop = Office::all();
        return view('public.Publicshop', compact('publicShop'));
    }

    public function public_report()
    {
        return view('public.PublicReport');
    }

    public function takePermission()
    {
        $per=permissionCheck::all();
        $vis=visitReason::all();
        return view('public.takepermission',compact('vis','per'));
    }

    public function public_presence()
    {
        return view('public.PublicPresence');
    }

//    public function PubliclogFunction(Request $request)
//    {
//        $pubicLogin = new publiclogin();
//        $pubicLogin->PublicName = $request->input('pubName');
//        $pubicLogin->PublicPass = $request->input('pubPass');
//        $pubicLogin->save();
//        return redirect('/public');
//    }

    public function Checkin(Request $request)
    {
        $userinfo = Auth::user();
        $userType = $userinfo->id;
        $userEmail = $userinfo->email;
       $publicCheck= new CheckinPublic();
       $publicCheck->checkInID=$userType;
       $publicCheck->checkInEmail=$userEmail;
       $publicCheck->save();
       return redirect('/public');

    }
    public function checkOut(Request $request){
        $userinfo = Auth::user();
        $userType = $userinfo->id;
        $userEmail = $userinfo->email;
        $publicCheck= new checkOutPublic();
        $publicCheck->CheckOutId=$userType;
        $publicCheck->CheckOutEmail=$userEmail;
        $publicCheck->save();
        return redirect('/public');
    }
    public function visitReason(Request $request){
        $visit=new visitReason();
        $visit->visitName=$request->input('visitName');
        $visit->visitEmail=$request->input('visitName');
        $visit->visitNumber=$request->input('visitNumber');
        $visit->visitReason=$request->input('VisitReason');
        $visit->save();
        return redirect('/takepermission');
    }


}
