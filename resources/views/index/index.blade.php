@extends('layouts.app')

@section('content')

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height:400px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

      <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" style="height:400px;">
            <div class="item active">
                <img src="{{asset('/img/item1.png')}}" alt="1 slide">
                {{--<div class="carousel-caption">--}}
                    {{--<h1>天蝎创立</h1>--}}
                    {{--<p>武汉工程大学天蝎团队成立于2015年6月8日，最开始由国际学院陈涛、理学院钟凡、计算机学院郭闻浩、艺术设计学院王斌、机电工程学院马金钟、陈翔宇、陈子豪组建，机电院副教授张志老师为指导，掌握三维重建、增强现实、虚拟现实、全息投影技术和全景图技术。</p>--}}

                    {{--<!-- <p><a class="btn btn-lg btn-primary" href="http://www.google.cn/intl/zh-CN/chrome/browser/" role="button" target="_blank">点我下载</a></p> -->--}}
                {{--</div>--}}
            </div>
            <div class="item">
                <img src="{{asset('/img/item2.png')}}" alt="2 slide">
                {{--<div class="carousel-caption">--}}
                    {{--<h1>泸沽湖景区项目</h1>--}}

                    {{--<p>2015年11月15日，天蝎团队接单，前往云南省泸沽湖景区进行航拍和全景照片拍摄，制作了宣传视频。</p>--}}

                   {{--<!-- <p><a class="btn btn-lg btn-primary" href="http://www.firefox.com.cn/download/" target="_blank" role="button">点我下载</a></p> -->--}}
                {{--</div>--}}
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="container grids-section" id="main-container">
        <h2>VR精选</h2>
        <div class="row text-center">
            <div class="col-xs-12 col-md-4">
                <a href="" class="grid-item">
                    <img src="{{ asset('img/photo1.jpg') }}" alt="" />
                    <!-- <div class="text-wrap">
                        <h3>标题</h3>
                        <p>小标题</p>
                    </div> -->
                </a>
            </div>
             <div class="col-xs-12 col-md-4">
                <a href="" class="grid-item">
                    <img src="{{ asset('img/photo2.jpg') }}" alt="" />
                    <!-- <div class="text-wrap">
                        <h3>标题</h3>
                        <p>小标题</p>
                    </div> -->
                </a>
            </div>
             <div class="col-xs-12 col-md-4">
                <a href="" class="grid-item">
                    <img src="{{ asset('img/photo3.jpg') }}" alt="" />
                    <!-- <div class="text-wrap">
                        <h3>标题</h3>
                        <p>小标题</p>
                    </div> -->
                </a>
            </div>
        </div>
    </section>

    <div class="container">
        <h2>VR推荐</h2>
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

@stop