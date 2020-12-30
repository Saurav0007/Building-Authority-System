<?php

namespace App\Http\Controllers;

use App\EmptyRoom;
use App\PublicRegistration;
use App\WorkerRegistratin;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function employee(){
        return view('Employee.index');
    }
    public function permission_details(){
        return view('Employee.permission_details');
    }
    public function permission_list(){
        return view('Employee.permission_list');
    }
    public function public_details(){
        $PD=PublicRegistration::all();
        return view('Employee.public_details',compact('PD'));
    }
    public function public_regi(){
        return view('Employee.public_regi');
    }
    public function RoomDetails(){
        return view('Employee.RoomDetails');
    }
    public function EmptyRoomDetails(){
        $ERD=EmptyRoom::all();
        return view('Employee.EmptyRoomDetails',compact('ERD'));
    }
    public function shop_office(){
        return view('Employee.shop_office');
    }
    public function worker_regi(){
        return view('Employee.worker_regi');
    }
    public function worker_details(){
        $WD=WorkerRegistratin::all();
        return view('Employee.worker_details',compact('WD'));
    }
    public function PublicRegi(Request $request){
        $publicRegi=new PublicRegistration();
        $publicRegi->PublicName=$request->input('PublicName');
        $publicRegi->PublicEmail=$request->input('PublicEmail');
        $publicRegi->PublicPhone=$request->input('PublicPhone');
        $publicRegi->PublicAddress=$request->input('PublicAddress');
        $publicRegi->PublicPassword=$request->input('PublicPassword');
        $publicRegi->save();
        return redirect('/public_details');
    }
    Public function WorkerRegi(Request $request){
        $WorkerRegi=new WorkerRegistratin();
        $WorkerRegi->WorkerName=$request->input('WorkerName');
        $WorkerRegi->WorkerEmail=$request->input('WorkerEmail');
        $WorkerRegi->WorkerPhone=$request->input('WorkerPhone');
        $WorkerRegi->WorkerAddress=$request->input('WorkerAddress');
        $WorkerRegi->WorkerPassword=$request->input('WorkerPassword');
        $WorkerRegi->save();
        return redirect('/worker_details');
    }
    public function EmptyRoom(Request $request){
        $EmpRoom=new EmptyRoom();
        $EmpRoom->Name=$request->input('name');
        $EmpRoom->RoomNo=$request->input('roomNo');
        $EmpRoom->RoomDetails=$request->input('roomDetails');
        $EmpRoom->check=$request->input('check');
        $EmpRoom->save();
        return redirect('/EmployeeRoomDetails');

    }


}
