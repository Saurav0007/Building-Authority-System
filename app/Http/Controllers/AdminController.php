<?php

namespace App\Http\Controllers;

use App\adminReportFeedback;
use App\CheckinPublic;
use App\checkOutPublic;
use App\CreateAccount;
use App\EmptyRoom;
use App\publiclogin;
use App\publicReport;
use App\publicReportFeedback;
use App\Shop\Office;
use App\User;
use App\wokerReport;
use App\workerCheckIn;
use App\workerCheckOut;
use App\workerLogin;
use App\workerReportFeedback;
use Facade\FlareClient\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

class AdminController extends Controller
{
    //
    public function admin(){
        $name=User::all();

        return view('Admin.index',compact('name'));
    }
    public function Details(){
        $p=0;
        $allAccountDetails=User::all();
        return view('Admin.Details',compact('p','allAccountDetails'));
    }
    public function Report(){
        $R=0;
        $P=0;
        $WorkerReport=wokerReport::all();
        $PublicReport=publicReport::all();
        return view('Admin.Report',compact('WorkerReport','R','PublicReport','P'));
    }
    public function Account(){
        return view('Admin.Account');
    }
    public function CheckedInUser(){
        $p=0;
        $pubCheckIn=CheckinPublic::all();
        $worCheckIn=workerCheckIn::all();
        return view('Admin.Checked_In',compact('pubCheckIn','worCheckIn','p'));
    }
    public function CheckedOutUser(){
        $p=0;
        $pubCheckOut=checkOutPublic::all();
        $worCheckOut=workerCheckOut::all();
        return view('Admin.Checked_Out',compact('p','worCheckOut','pubCheckOut'));
    }
    public function Shop_office(){
        $SO=Office::all();
        return view('Admin.Shop_office',compact('SO'));
    }
    public function RoomDetails(){
        $r=0;
        $RDA=EmptyRoom::all();
        return view('Admin.RoomDetails',compact('RDA','r'));
    }

    public function AccountAdmin(Request $request){
        $user = new User();
        $user->name = $request->EmpName;
        $user->email = $request->EmpEmail;
        $user->password = Hash::make($request->input('EmpPass'));
        $user->userType = 4; //Employee
        $user->save();
        $AdAcc=new CreateAccount();
        $AdAcc->EName=$request->input('EmpName');
        $AdAcc->Eemail=$request->input('EmpEmail');
        $AdAcc->Epass=$request->input('EmpPass');
        $AdAcc->Eaddress=$request->input('EmpAddress');
        $AdAcc->EPhoneNo=$request->input('EmpPhone');
        $AdAcc->save();
        return redirect('/Account');

    }
    Public function ShopOfficeAdmin(Request $request){
        $SO= new Office();
        $SO->ShopName=$request->input('ShopName');
        $SO->ShopType=$request->input('SOType');
        $SO->ShopNo=$request->input('ShopNo');
        $SO->ShopDetails=$request->input('ShopDetails');


        if ($request->hasFile('ShopPhoto')) {
            $file = $request->file('ShopPhoto');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('Uploads/SOpicture/', $filename);
            $SO->ShopPhoto = $filename;
        }
        $SO->save();
        return redirect('/Shop_office');
}
public function DeleteAcc($id){
        $Acc=CreateAccount::find($id);
        $Acc->delete();
        return redirect('/AccountDetails');
    }

    public function deleteWreport($id){
        $WR=wokerReport::find($id);
        $WR->delete();
        return redirect('/Report');
    }
    public function deletePreport($id){
        $PR=publicReport::find($id);
        $PR->delete();
        return redirect('/Report');
    }
    public function deleteSOdetails($id){
        $s=Office::find($id);
        $s->delete();
        return redirect('/Shop_office');
    }
    public function deleteRoomDetails($id){
        $rda=EmptyRoom::find($id);
        $rda->delete();
        return redirect('/RoomDetails');
    }
    public function systemLogin(){
        return view('Admin.adminlogin');
    }
    public function AccountDetails(){
        $Acc=CreateAccount::all();
        return view('Admin.AccountDetails',compact('Acc'));
    }
    public function GiveFeedback(Request $request){
        $feedback=new adminReportFeedback();
        $feedback->publicFeedbackReport=$request->input('feedBackReport');
        $feedback->save();
        return redirect('/Report');
    }
    public function giveFeedback2(Request $request){
        $publicFeedback= new workerReportFeedback();
        $publicFeedback->workerReportFeedback=$request->input('workerReportFeedback');
        $publicFeedback->save();
        return redirect('/Report');
    }
    public function editEmptyRoomDetails(Request  $request)
    {
        $EmpRoom = EmptyRoom::find($request->hdn_id);
        $EmpRoom->check = $request->input('check');
        $EmpRoom->save();
        return redirect('/RoomDetails');
    }
    public function editShopDetails(Request $request){
        $SO= Office::find($request->hdn_id);
        $SO->ShopName=$request->input('ShopName');
        $SO->ShopType=$request->input('SOType');
        $SO->ShopNo=$request->input('ShopNo');
        $SO->ShopDetails=$request->input('ShopDetails');
        if ($request->hasFile('ShopPhoto')) {
            $file = $request->file('ShopPhoto');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('Uploads/SOpicture/', $filename);
            $SO->ShopPhoto = $filename;
        }
        $SO->save();
        return redirect('/Shop_office');
    }


}
