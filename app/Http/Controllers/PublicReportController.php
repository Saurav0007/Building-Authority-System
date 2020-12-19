<?php

namespace App\Http\Controllers;

use App\publicReport;
use Illuminate\Http\Request;

class PublicReportController extends Controller
{
    //
    public function PublicReport(Request $request){
        $pr = new publicReport();
        $pr->PublicName=$request->input('Pname');
        $pr->PublicEmail=$request->input('Pemail');
        $pr->PublicReportType=$request->input('PReportType');
        $pr->PublicReportMsg=$request->input('PReportMsg');
        $pr->save();
        return redirect('/PublicReport');
    }
}
