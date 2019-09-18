@extends('layouts.fe')
@section('content')

	<!--Banner-->
	<div class="container-fluid">
		<div class="row">
			<img src="image/bg_pageSmall_1.png">
		</div>
	</div><!--Banner_END-->

	<div class="container text-center mt_40 mb_40">
		<h1 class="title_block font36">tôi và IEG</h1>
	</div>

	<div class="content_baiviet wpx1470">
		<div class="content_left wpx400">
			<ul class="content_left--list">
				<li class="active"><a href="#">Học viên</a></li>
				<li><a href="#">Giáo viên</a></li>
				<li><a href="#">Phụ huynh</a></li>
				<li><a href="#">Người IEG</a></li>
			</ul>
			<ul class="content_left--list mt_130_cust mt_130">
				<li class="active"><a>Bài viết tương tự</a></li>
				<li>
					<ul class="list-inline">
						<li>
							<a href="#">
								<img src="image/tintuc_1.jpg">
							</a>
						</li>
						<li>
							<a class="font18" href="#">Lorem Ipsum is simply dummy text </a>
						</li>
					</ul>
				</li>
				<li>
					<ul class="list-inline">
						<li>
							<a href="#">
								<img src="image/tintuc_2.jpg">
							</a>
						</li>
						<li>
							<a class="font18" href="#">Lorem Ipsum is simply dummy text </a>
						</li>
					</ul>
				</li>
				<li>
					<ul class="list-inline">
						<li>
							<a href="#">
								<img src="image/tintuc_3.jpg">
							</a>
						</li>
						<li>
							<a class="font18" href="#">Lorem Ipsum is simply dummy text </a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="content_right">
			<div class="toivaIEG_baivietchitiet mb_100">
				<span class="wimg100"><img src="image/tintuc_4.jpg"></span>
				<p class="mt_40"><span class="time_news">19.08.2019</span></p>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				<div class="col-md-12 mt_40">
					<div class="row">
						<ul class="flex-box">
							<li>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li>
								<ul>
									<li>
										<a href="#">Creat</a>
									</li>
									<li>
										Admin
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
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
