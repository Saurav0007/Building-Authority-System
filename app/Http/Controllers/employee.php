<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employee extends Controller
{
    //
    public function employee(){
        return view('employee.index');
    }
}
