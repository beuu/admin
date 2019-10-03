@extends('layouts.fe')
@section('content')

	<!--Banner-->
	<div class="container-fluid">
		<div class="row">
			<img src="image/bg_pageSmall_1.png">
		</div>
	</div><!--Banner_END-->

	<div class="container text-center mt_40 mb_40">
		<h1 class="title_block font36">tin tức</h1>
	</div>
	<div class="qoutes wpx1470 mt_100">
		<p class="qoutes_content">
			Tại IEG, tất các các thông tin quan trọng cả bên trong & bên ngoài nhà trường được tổng hợp một các có hệ thống để việc lựa chọn luồng thông tin cho quá trình học tập trở nên thuận lợi hơn.
		</p>
	</div>
	<div class="content_baiviet wpx1470">
		<div class="content_left wpx400">
			<ul class="content_left--list mt_130_cust">
				<li class="active"><a>Tin tức mới</a></li>
				@foreach ($data as $item)
				<li>
					<ul class="list-inline">
						<li>
							<a href="{{ route('tintucct', $item->slugs->slug)}}">
								<img src="{{ url('/').$item->image}}">
							</a>
						</li>
						<li>
							<a class="font18" href="{{ route('tintucct', $item->slugs->slug)}}">{{$item->title}}</a>
						</li>
					</ul>
				</li>
				@endforeach
				
			</ul>
		</div>
		<div class="content_right">
			<div class="toivaIEG_baivietchitiet mb_100">
				<span class="wimg100"><img src="image/tintuc_4.jpg"></span>
				<ul class="flex-box box_listCust">
					@foreach ($dataf as $item)
					<li class="bg_li bg_xam">
					<a href="{{ route('tintucct', $item->slugs->slug)}}">
								<img src="{{ url('/').$item->image}}">
								<p class="time_news mt_30 pd_10">{{$item->created_at}}</p>
								<p class="font30 pd_10">{{$item->title}}</p>
							</a>
						</li>
					@endforeach
					
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<h1 class="title_block font36">Sự kiện</h1>
		<p class="mt_40"><a href="#"><img src="image/tintuc_7.jpg"></a></p>
		<p class="mt_40"><a href="#"><img src="image/tintuc_7.jpg"></a></p>
	</div>
	<h1 class="title_block font36 mt_150 mb_100">IEG TV</h1>
	<div class="container-fluid bg_xam pdt_100">
		<div class="row">
			<div class="container text-center">
				<a href="{{ route('video')}}">
					<img src="image/tintuc_8.jpg">
				</a>
				<p>
				<a href="{{ route('video')}}" class="btn_moreCust bg_vang font18">Xem thêm...</a>
				</p>
			</div>
		</div>
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
@endsection
