@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 screen-adver">
					<a href=""><img src="{{ asset('img/screen-ad.jpg') }}" alt="" width="100%" /></a>
					<span>做个高效的程序猿</span>
			</div>
			<div class="col-xs-12 col-md-6 screen-adver">
				<div class=" screen-imgBox">
					<a href=""><img src="{{ asset('img/photo4.jpg') }}" alt="" width="100%" /></a>
					<span>天蝎直播</span>
				</div>
				<div class=" screen-imgBox">
					<a href=""><img src="{{ asset('img/photo5.jpg') }}" alt="" width="100%" /></a>
					<span>直播那些事</span>
				</div>
				<div class=" screen-imgBox">
					<a href=""><img src="{{ asset('img/photo5.jpg') }}" alt="" width="100%" /></a>
					<span>教你一分钟上手</span>
				</div>
				<div class=" screen-imgBox">
					<a href=""><img src="{{ asset('img/photo4.jpg') }}" alt="" width="100%" /></a>
					<span>做个合格的程序员</span>
				</div>
			</div>
		</div>
	</div>

	<section>
		<div class="container">
			<div class="row">
				<h3>硬件测评</h3>
				<div class="row container">
					<a class="pull-left screen-p" href="#" >最新</a>
					<a class="pull-right" href="#">查看更多</a>
				</div>
				<div class="row container ">
					<div class="col-xs-12 col-md-4 text-center screen-video-item">
						<a href="">
							<img src="{{ asset('img/photo1.jpg') }}" alt=""   />
							<span class="list-cover"></span>
							<span class="left-line"></span>
							<span class="right-line"></span>
							<span class="list-play">播放</span>
						</a>
						<h4>一分钟上手</h4>
					</div>
					<div class="col-xs-12 col-md-4 text-center screen-video-item">
						<a href="">
							<img src="{{ asset('img/photo3.jpg') }}" alt=""   />
							<span class="list-cover"></span>
							<span class="left-line"></span>
							<span class="right-line"></span>
							<span class="list-play">播放</span>
						</a>
						<h4>教你学高大上</h4>
					</div>
					<div class="col-xs-12 col-md-4 text-center screen-video-item">
						<a href="">
							<img src="{{ asset('img/photo5.jpg') }}" alt=""  />
							<span class="list-cover"></span>
							<span class="left-line"></span>
							<span class="right-line"></span>
							<span class="list-play">播放</span>
						</a>
						<h4>让自己更出彩</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<h3>天蝎那些事</h3>
				<div class="row container">
					<a class="pull-left screen-p" href="#" >最新</a>
					<a class="pull-right" href="#">查看更多</a>
				</div>
				<div class="row container ">
					<div class="col-xs-12 col-md-4 text-center screen-video-item">
						<a href="">
							<img src="{{ asset('img/photo1.jpg') }}" alt=""  />
							<span class="list-cover"></span>
							<span class="left-line"></span>
							<span class="right-line"></span>
							<span class="list-play">播放</span>
						</a>
						<h4>一分钟上手</h4>
					</div>
					<div class="col-xs-12 col-md-4 text-center screen-video-item">
						<a href="">
							<img src="{{ asset('img/photo3.jpg') }}" alt=""   />
							<span class="list-cover"></span>
							<span class="left-line"></span>
							<span class="right-line"></span>
							<span class="list-play">播放</span>
						</a>
						<h4>教你学高大上</h4>
					</div>
					<div class="col-xs-12 col-md-4 text-center screen-video-item">
						<a href="">
							<img src="{{ asset('img/photo5.jpg') }}" alt="" />
							<span class="list-cover"></span>
							<span class="left-line"></span>
							<span class="right-line"></span>
							<span class="list-play">播放</span>
						</a>
						<h4>让自己更出彩</h4>
					</div>
				</div>
			</div>
		</div>
	</section>

@stop