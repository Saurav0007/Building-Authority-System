<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicindex extends Controller
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
        return view('public.Publicoffice');
    }

    public function public_shop(){
        return view('public.Publicshop');
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
