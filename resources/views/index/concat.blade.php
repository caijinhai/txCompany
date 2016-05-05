@extends('layouts.app')

@section('content')

    <div class="container about-head">
        <h1 class="text-center animation-slideDown"><i class="fa fa-envelope"></i> <strong>Contact Us</strong></h1>
        <h2 class="h3 text-center animation-slideUp">We will be happy to answer all your questions and work together!</h2>
    </div>

    <div class="container">
    	<div class="row pad">
    		<div class="col-md-3  col-xs-6 text-center user-item">
    			<img src="{{  asset('img/avatar.jpg') }} " alt="" />
    			<h3>BOSS</h3>
    			<p><strong>CEO</strong></p>
    			<i class="fa fa-facebook"></i><i class="fa fa-google"></i><i class="fa fa fa-envelope-o"></i>
    		</div>
    		<div class="col-md-3 col-xs-6 text-center user-item">
    			<img src="{{  asset('img/avatar.jpg') }} " alt="" />
    			<h3>BOSS</h3>
    			<p><strong>CEO</strong></p>
    			<i class="fa fa-facebook"></i><i class="fa fa-google"></i><i class="fa fa fa-envelope-o"></i>
    		</div>
    		<div class="col-md-3 col-xs-6 text-center user-item">
    			<img src="{{  asset('img/avatar.jpg') }} " alt="" />
    			<h3>BOSS</h3>
    			<p><strong>CEO</strong></p>
    			<i class="fa fa-facebook"></i><i class="fa fa-google"></i><i class="fa fa fa-envelope-o"></i>
    		</div>
    		<div class="col-md-3 col-xs-6 text-center user-item">
    			<img src="{{  asset('img/avatar.jpg') }} " alt="" />
    			<h3>BOSS</h3>
    			<p><strong>CEO</strong></p>
    			<i class="fa fa-facebook"></i><i class="fa fa-google"></i><i class="fa fa fa-envelope-o"></i>
    		</div>
    		<div class="col-md-3 col-md-offset-2 col-xs-6 text-center user-item">
    			<img src="{{  asset('img/avatar.jpg') }} " alt="" />
    			<h3>BOSS</h3>
    			<p><strong>CEO</strong></p>
    			<i class="fa fa-facebook"></i><i class="fa fa-google"></i><i class="fa fa fa-envelope-o"></i>
    		</div>
    		<div class="col-md-3 col-md-offset-2 col-xs-6 text-center user-item">
    			<img src="{{  asset('img/avatar.jpg') }} " alt="" />
    			<h3>BOSS</h3>
    			<p><strong>CEO</strong></p>
    			<i class="fa fa-facebook"></i><i class="fa fa-google"></i><i class="fa fa fa-envelope-o"></i>
    		</div>
    	</div>
    	<hr />
    </div>

 	<div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 site-block">
                <div class="site-block">
                    <h3 class="h2 site-heading"><strong>Company</strong> Inc</h3>
                    <address>
                        Address<br>
                        Town/City<br>
                        Region, Zip/Postal Code<br><br>
                        <i class="fa fa-phone"></i> (000) 000-0000<br>
                        <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">example@example.com</a>
                    </address>
                </div>
                <div class="site-block">
                    <h3 class="h2 site-heading"><strong>About</strong> Us</h3>
                    <p class="remove-margin">
                        In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-8 site-block">
                <h3 class="h2 site-heading"><strong>Contact</strong> Form</h3>
                <form action="" method="post" id="form-contact">
                    <div class="form-group">
                        <label for="contact-name">Name</label>
                        <input type="text" id="contact-name" name="contact-name" class="form-control input-lg" placeholder="Your name..">
                    </div>
                    <div class="form-group">
                        <label for="contact-email">Email</label>
                        <input type="text" id="contact-email" name="contact-email" class="form-control input-lg" placeholder="Your email..">
                    </div>
                    <div class="form-group">
                        <label for="contact-message">Message</label>
                        <textarea id="contact-message" name="contact-message" rows="10" class="form-control input-lg" placeholder="Let us know how we can assist.."></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop