<?php

namespace App\Http\Controllers;

use App\wokerReport;
use Illuminate\Http\Request;

class WokerReportController extends Controller
{
    //
    public function WorkerReport(Request $request){
        $WorkerReport=new wokerReport();
        $WorkerReport->WorkerName=$request->input('name');
        $WorkerReport->WorkerEmail=$request->input('email');
        $WorkerReport->WorkerReportType=$request->input('ReportType');
        $WorkerReport->WorkerReportMsg=$request->input('ReportMsg');
        $WorkerReport->save();
        return redirect('/Report');
    }
}
