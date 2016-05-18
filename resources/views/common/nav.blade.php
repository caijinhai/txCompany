<nav class=" navbar-default navbar-inverse">
	<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand navLogo" href="#"><img src="{{ asset('img/logo.png') }}" alt="logo" /></a>
		</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
		  	<ul class="nav navbar-nav">
			    <li><a href="{{ url('/index') }}">发现 <span class="sr-only">(current)</span></a></li>
			    <li><a href="{{ url('/photo') }}">全景图片</a></li>
			    <li><a href="{{ url('/screen') }}">全景视频</a></li>
				{{--<li><a href="{{ url('/upload') }}">发布全景</a></li>--}}

				{{--<li><a href="{{ url('/news') }}">新闻中心</a></li>--}}
			    {{--<li><a href="{{ url('/about') }}">关于我们</a></li>--}}
			    {{--<li><a href="{{ url('/concat') }}">联系我们</a></li>--}}
		  	</ul>

			<!-- Right Side Of Navbar -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Authentication Links -->
				@if (Auth::guest())
					<li><a href="{{ url('/login') }}">Login</a></li>
					<li><a href="{{ url('/register') }}">Register</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
						</ul>
					</li>
				@endif
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>