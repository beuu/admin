<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IegController extends Controller
{
    public function toivaieg(){
        return view('fe.toivaieg');
    }

    public function toivaiegp(){
        return view('fe.toivaiegp');
    }

    public function toivaiegc(){
        return view('fe.toivaiegchitiet');
    }
}
