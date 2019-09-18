<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IegController extends Controller
{


    
    public function cauchuyenieg(){
        return view('fe.cauchuyenieg');
    }

    public function nguoigiulua(){
        return view('fe.nguoigiulua');
    }

    public function dayvahoc(){
        return view('fe.dayvahoc');
    }
    public function tienganh(){
        return view('fe.tienganh');
    }   

    public function toivaieg(){
        return view('fe.toivaieg');
    }

    public function gocnhingd(){
        return view('fe.gocnhingd');
    }

    public function tintuc(){
        return view('fe.tintuc');
    }
    public function tintucct(){
        return view('fe.tintucct');
    }



    public function homeieg(){
        return view('home');
    }

    public function toivaiegp(){
        return view('fe.toivaiegp');
    }

    public function toivaiegc(){
        return view('fe.toivaiegchitiet');
    }

    public function khoahoc(){
        return view('fe.khoahoc');
    }


    public function toanhoc(){
        return view('fe.pagekhoahoc');
    }
}
