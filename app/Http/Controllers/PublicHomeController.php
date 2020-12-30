<?php

namespace App\Http\Controllers;

use App\Shop\Office;
use Illuminate\Http\Request;

class PublicHomeController extends Controller
{
    //
    public function public(){
        return view('public.index_public');
    }
    public function askPermission(){
        return view('public.askpermission');
    }

    public function public_feedback(){
        return view('public.PublicFeedback');
    }

    public function public_office(){
        $publicOffice=Office::all();
        return view('public.Publicoffice',compact('publicOffice'));
    }

    public function public_shop(){
        $publicShop=Office::all();
        return view('public.Publicshop',compact('publicShop'));
    }

    public function public_report(){
        return view('public.PublicReport');
    }
    public function takePermission(){
        return view('public.takepermission');
    }

    public function public_presence(){
        return view('public.PublicPresence');
    }

}
