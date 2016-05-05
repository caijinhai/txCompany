@extends('layouts.app')

@section('content')

    <div class="container about-head">
        <h1 class="text-center"><i class="fa fa-thumbs-up"></i> <strong>Flexible Plans</strong></h1>
        <h2 class="h3 text-center">Affordable pricing for everyone! We want <strong>you</strong> to get the <strong>best deal</strong>!</h2>
    </div>

    <div class="container">
        <div class="row product-block">
            <div class="col-sm-3">
                <table class="table table-borderless ">
                    <thead>
                        <tr>
                            <th class="table-featured">软件开发</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>2</strong> Projects</td>
                        </tr>
                        <tr>
                            <td><strong>10GB</strong> Storage</td>
                        </tr>
                        <tr>
                            <td><strong>15</strong> Clients</td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong> Support</td>
                        </tr>
                        <tr>
                            <td class="table-price">
                                <h1>$9<br><small>per month</small></h1>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-primary">Sign Up</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3">
                <table class="table table-borderless table-pricing animation-fadeIn">
                    <thead>
                        <tr>
                            <th class="table-featured"><i class="fa fa-check"></i> 平面设计</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>10</strong> Projects</td>
                        </tr>
                        <tr>
                            <td><strong>30GB</strong> Storage</td>
                        </tr>
                        <tr>
                            <td><strong>100</strong> Clients</td>
                        </tr>
                        <tr>
                            <td><strong>FULL</strong> Support</td>
                        </tr>
                        <tr>
                            <td class="table-price">
                                <h1>$39<br><small>per month</small></h1>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-primary">Sign Up</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3">
                <table class="table table-borderless table-pricing ">
                    <thead>
                        <tr>
                            <th class="table-featured">视频拍摄制作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>50</strong> Projects</td>
                        </tr>
                        <tr>
                            <td><strong>100GB</strong> Storage</td>
                        </tr>
                        <tr>
                            <td><strong>1000</strong> Clients</td>
                        </tr>
                        <tr>
                            <td><strong>FULL</strong> Support</td>
                        </tr>
                        <tr>
                            <td class="table-price">
                                <h1>$99<br><small>per month</small></h1>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-primary">Sign Up</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3">
                <table class="table table-borderless table-pricing ">
                    <thead>
                        <tr>
                            <th class="table-featured">AR&VR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Unlimited</strong> Projects</td>
                        </tr>
                        <tr>
                            <td><strong>Unlimited</strong> Storage</td>
                        </tr>
                        <tr>
                            <td><strong>Unlimited</strong> Clients</td>
                        </tr>
                        <tr>
                            <td><strong>FULL</strong> Support</td>
                        </tr>
                        <tr>
                            <td class="table-price">
                                <h1>$199<br><small>per month</small></h1>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-primary">Sign Up</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
    	<hr>
        <div class=" product-section">
        	<div id="testimonials-carousel" class="carousel slide " data-ride="carousel"  >
	            <ol class="carousel-indicators">
	                <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
	                <li data-target="#testimonials-carousel" data-slide-to="1"></li>
	                <li data-target="#testimonials-carousel" data-slide-to="2"></li>
	            </ol>

	            <div class="carousel-inner text-center product-inner">
	                <div class="active item product-item">
	                    <p><img src="{{ asset('img/avatar.jpg') }}" alt="Avatar" class="img-circle"></p>
	                    <p>An awesome team that brought our ideas to life! Highly recommended!</p>
	                    <div><strong>Sophie Illich</strong>, example.com</div>
	                </div>
	                <div class="item product-item">
	                    <p><img src="{{ asset('img/avatar.jpg') }}" alt="Avatar" class="img-circle"></p>
	                    <p>I have never imagined that our final product would look that good!</p>
	                    <div><strong>David Cull</strong>, example.com</div>
	                </div>
	                <div class="item product-item">
	                    <p><img src="{{ asset('img/avatar.jpg') }}" alt="Avatar" class="img-circle"></p>
	                    <p>An extraordinary service that helped us grow way too fast!</p>
	                    <div><strong>Nathan Brown</strong>, example.com</div>
	                </div>
	            </div>
	        </div>
        </div>
        <hr>
    </div>

    <div class="container">
        <h3 class="text-center "><strong>All Plans</strong> Include</h3>
        <div class="row pad">
            <div class="col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2">
                <ul class="fa-ul">
                    <li><i class="fa fa-check text-primary fa-li"></i> Free updates for life</li>
                    <li><i class="fa fa-check text-primary fa-li"></i> Premium documentation</li>
                    <li><i class="fa fa-check text-primary fa-li"></i> Premium back up features</li>
                </ul>
            </div>
            <div class="col-sm-5 col-md-4">
                <ul class="fa-ul">
                    <li><i class="fa fa-check text-primary fa-li"></i> 100% Uptime</li>
                    <li><i class="fa fa-check text-primary fa-li"></i> US, Europe & Asia Locations</li>
                    <li><i class="fa fa-check text-primary fa-li"></i> One year access to our asset library</li>
                </ul>
            </div>
        </div>
        <div class="text-center pad">
            <a href="javascript:void(0)" class="btn btn-lg btn-primary"><i class="fa fa-angle-right"></i> Sign Up Now <i class="fa fa-angle-left"></i> </a>
        </div>
    </div>

@stop