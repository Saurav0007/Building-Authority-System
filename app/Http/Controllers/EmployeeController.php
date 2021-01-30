<?php

namespace App\Http\Controllers;

use App\EmptyRoom;
use App\permissionCheck;
use App\PublicRegistration;
use App\Shop\Office;
use App\User;
use App\visitReason;
use App\WorkerRegistratin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Psy\CodeCleaner\UseStatementPass;

class EmployeeController extends Controller
{
    //
    public function employee()
    {
        return view('Employee.index');
    }

    public function permission_details()
    {
        $vis=visitReason::all();
        return view('Employee.permission_details',compact('vis'));
    }

    public function permission_list()
    {
        $per=permissionCheck::all();
        $vis=visitReason::all();
        return view('Employee.permission_list',compact('vis','per'));
    }

    public function public_details()
    {
        $PD = PublicRegistration::all();
        return view('Employee.public_details', compact('PD'));
    }

    public function public_regi()
    {
        return view('Employee.public_regi');
    }

    public function RoomDetails()
    {
        return view('Employee.RoomDetails');
    }

    public function EmptyRoomDetails()
    {
        $ERD = EmptyRoom::all();
        return view('Employee.EmptyRoomDetails', compact('ERD'));
    }

    public function shop_office()
    {
        $EmpSO = Office::all();
        return view('Employee.shop_office', compact('EmpSO'));
    }

    public function worker_regi()
    {
        return view('Employee.worker_regi');
    }

    public function emplogin()
    {
        return view('Employee.EmpLogin');
    }

    public function worker_details()
    {
        $WD = WorkerRegistratin::all();
        return view('Employee.worker_details', compact('WD'));
    }

    public function PublicRegi(Request $request)
    {
        $user = new User();
        $user->name = $request->PublicName;
        $user->email = $request->PublicEmail;
        $user->password = Hash::make($request->input('PublicPassword'));
        $user->userType = 3; //public
        $user->save();
        $publicRegi = new PublicRegistration();
        $publicRegi->PublicName = $request->input('PublicName');
        $publicRegi->PublicEmail = $request->input('PublicEmail');
        $publicRegi->PublicPhone = $request->input('PublicPhone');
        $publicRegi->PublicAddress = $request->input('PublicAddress');
        $publicRegi->PublicPassword = $request->input('PublicPassword');
        $publicRegi->save();
        return redirect('/public_regi');
    }

    public function WorkerRegi(Request $request)
    {
        $user  = new User();
        $user->name = $request->WorkerName;
        $user->email = $request->WorkerEmail;
        $user->password = Hash::make($request->input('WorkerPassword'));
        $user->userType = 2; //worker
        $user->save();
        $user->name = $request->WorkerName;
        $WorkerRegi = new WorkerRegistratin();
        $WorkerRegi->WorkerName = $request->input('WorkerName');
        $WorkerRegi->WorkerEmail = $request->input('WorkerEmail');
        $WorkerRegi->WorkerPhone = $request->input('WorkerPhone');
        $WorkerRegi->WorkerWPlace = $request->input('WorkerWPlace');
        $WorkerRegi->WorkerAddress = $request->input('WorkerAddress');
        $WorkerRegi->WorkerPassword = $request->input('WorkerPassword');
        $WorkerRegi->save();
        return redirect('/worker_regi');
    }

    public function EmptyRoom(Request $request)
    {
        $EmpRoom = new EmptyRoom();
        $EmpRoom->Name = $request->input('name');
        $EmpRoom->RoomNo = $request->input('roomNo');
        $EmpRoom->RoomDetails = $request->input('roomDetails');
        $EmpRoom->check = $request->input('check');
        $EmpRoom->save();
        return redirect('/EmployeeRoomDetails');

    }
    public function deleteEmpRoomDetails($id){
        $erd=EmptyRoom::find($id);
        $erd->delete();
        return redirect('/EmployeeRoomDetails');
    }
    public function permissionCheck(Request $request){
        $permission=new permissionCheck();
        $permission->permissionCheck=$request->input('permissionCheck');
        $permission->save();
        return redirect('permission_details');
    }


}
