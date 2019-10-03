<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Slug;
use App\Models\IegMePost;
use App\Models\Video;
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
        $data = IegMePost::select()->orderBy('id', 'desc')->paginate(9);
        return view('fe.toivaieg',compact(['data']));
    }

    public function toivaiegc($slug){
        $dataslug = Slug::where('slug',$slug)->first();
        $data = IegMePost::where('slug_id',$dataslug->id)->first();
        $datas = IegMePost::where('cid',$data->cid)->orderBy('id', 'desc')->take(3)->get();
        return view('fe.toivaiegpchitiet',compact(['data','datas']));
    }

    public function gocnhingd(){
        return view('fe.gocnhingd');
    }

    public function tintuc(){
        $dataf = News::where('feature',1)->orderBy('id', 'desc')->take(2)->get();
        $data = News::select()->orderBy('id', 'desc')
        ->take(5)->get();
        return view('fe.tintuc',compact(['dataf','data']));
    }
    public function tintucct($slug){
        $dataslug = Slug::where('slug',$slug)->first();
        $data = News::where('slug_id',$dataslug->id)->first();
        $datas = News::where('cid',$data->cid)->orderBy('id', 'desc')->take(3)->get();
        return view('fe.tintucct',compact(['data','datas']));
    }



    public function homeieg(){
        return view('home');
    }

    public function toivaiegp(){
        return view('fe.toivaiegp');
    }

    public function khoahoc(){
        return view('fe.khoahoc');
    }


    public function toanhoc(){
        return view('fe.pagekhoahoc');
    }

    public function video(){
        $data = Video::all();
        return view('fe.video',compact(['data']));
    }
}
