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
			    <li><a href="{{ url('/index') }}">首页 <span class="sr-only">(current)</span></a></li>
			    <li><a href="{{ url('/screen') }}">全景</a></li>
			    <li><a href="{{ url('/product') }}">业务</a></li>
			    <li><a href="{{ url('/news') }}">新闻中心</a></li>
			    <li><a href="#">商店</a></li>
			    <li><a href="#">论坛</a></li>
			    <li><a href="{{ url('/about') }}">关于我们</a></li>
			    <li><a href="{{ url('/concat') }}">联系我们</a></li>
		  	</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>