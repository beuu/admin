@extends('layouts.fe')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('fe/video.js/dist/video-js.min.css')}}">
@endsection
@section('content')

	<!--Banner-->
	<div class="container-fluid">
            <div class="row">
                <img src="image/bg_pageSmall_2.png">
            </div>
        </div><!--Banner_END-->
    
        <div class="container text-center mt_40 mb_40">
            <h1 class="title_block font36">ieg tv</h1>
        </div>
        <div class="qoutes wpx1470 mt_100">
            <p class="qoutes_content">
                Tại IEG, tất các các thông tin quan trọng cả bên trong & bên ngoài nhà trường được tổng hợp một các có hệ thống để việc lựa chọn luồng thông tin cho quá trình học tập trở nên thuận lợi hơn.
            </p>
        </div>
        <!--Tôi và IEG-->
        <div class="tinnoibat wpx1470">
            <h2 class="title_tintuc font24">Nổi bật</h2>
            <div class="toivaieg flex-box">
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                            <video
                            id="vid1"
                            class="video-js vjs-default-skin vjs-big-play-centered"
                            width="" height="264"
                            controls
                            data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=cNZnYNPceY0"}] }'
                          >
                          </video>
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                @foreach ($data as $item)
                <div class="col-4-cust">
                        <a class="block_display" href="#">
                                <video
                                id="{{$item->id}}"
                                class="video-js vjs-default-skin vjs-big-play-centered"
                                width="" height="264"
                                controls
                                data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "{{ $item->link }}"}] }'
                              >
                              </video>
                              
                            <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                            <p class="mt_20"><span>10/12/2019</span></p>
                        </a>
                    </div>
                @endforeach
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
            </div><!--/Tôi và IEG_END-->
        </div>
        <div class="tinnoibat wpx1470">
            <h2 class="title_tintuc font24 mt_100">Phổ biến</h2>
            <div class="toivaieg flex-box">
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
                <div class="col-4-cust">
                    <a class="block_display" href="#">
                        <img src="image/img_02.jpg">
                        <p class="title_news font18">Tin tức trong ngày 1 2 3 4 5</p>
                        <p class="mt_20"><span>10/12/2019</span></p>
                    </a>
                </div>
            </div><!--/Tôi và IEG_END-->
        </div>
    
        <!--Khóa học-->
        <div class="container wpx920_width100vh">
            <h1 class="title_block font36">CÁC KHOÁ HỌC TẠI IEG</h1>
            <div class="row flex-box block_01">
                <div class="col-2-cust text-center">
                    <img src="image/iconinfo_01.png">
                    <p class="info_KH">Tiếng Anh</p>
                </div>
                <div class="col-2-cust text-center">
                    <img src="image/iconinfo_02.png">
                    <p class="info_KH">Khoa Học</p>
                </div>
                <div class="col-2-cust text-center">
                    <img src="image/iconinfo_03.png">
                    <p class="info_KH">Toán Học</p>
                </div>
                <div class="col-2-cust text-center">
                    <img src="image/iconinfo_04.png">
                    <p class="info_KH">Socrates</p>
                </div>
                <div class="col-2-cust text-center">
                    <img src="image/iconinfo_05.png">
                    <p class="info_KH">IELTS</p>
                </div>
            </div>
        </div><!--/Khóa học_END-->
        <script src="{{asset('fe/video.js/dist/video.js')}}"></script>
<script src="{{asset('fe/js/Youtube.js')}}"></script>
@endsection
@section('script')

@endsection
