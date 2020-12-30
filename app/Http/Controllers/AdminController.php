<?php

namespace App\Http\Controllers;

use App\CreateAccount;
use App\publicReport;
use App\Shop\Office;
use App\wokerReport;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin(){
        return view('Admin.index');
    }
    public function Details(){
        return view('Admin.Details');
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
    public function Shop_office(){
        $SO=Office::all();
        return view('Admin.Shop_office',compact('SO'));
    }
    public function RoomDetails(){
        return view('Admin.RoomDetails');
    }
    public function LogOut(Request $request){
        $request->sesion->flush();
        return view('Admin.index');
    }

    public function AccountAdmin(Request $request){
        $AdAcc=new CreateAccount();
        $AdAcc->EName=$request->input('EmpName');
        $AdAcc->Eemail=$request->input('EmpEmail');
        $AdAcc->Epass=$request->input('EmpPass');
        $AdAcc->Eaddress=$request->input('EmpAddress');
        $AdAcc->Eposition=$request->input('EmpPosition');
        $AdAcc->Etime=$request->input('EmpTime');
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

}
