<!DOCTYPE html>
<html>
<head>
	<title>天蝎科技有限公司</title>
	<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="x-ua-compatible" content="IE=edge" />
	<style>
		@-ms-viewport { width:device-width; }
		@media only screen and (min-device-width:800px) { html { overflow:hidden; } }
		html { height:100%; }
		body { height:100%; overflow:hidden; margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF; background-color:#000000;position:relative; }
		#title{position:fixed; top:40px;left:8%;color:#fff;text-align: center;z-index:10;}
		#title a{display: block;width:100px; height: 30px;line-height: 30px;font-family: Arial;font-size:18px;margin:0 auto;background-color: #3677D6;opacity: 0.7;color:#fff;}
		#title a:hover{
			background-color: #fff;
			color:#000;
			text-decoration: none;
		}

	</style>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<script src="{{ asset('js/embedpano.js') }}"></script>

	<div class="container" id="title" >
    	<div class="row text-center">
    		<h1>WELCOME TO TIANXIE</h1>
    		<h3>AR与VR 带你走进全景世界</h3>
    		<a href="{{ asset('/index') }}" >
    			进入
    		</a>
    	</div>
    </div>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:100%;height:100%;">
        <!-- Indicators -->
        <ol class="carousel-indicators" >
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" ></li>
        </ol>

      <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" style="width:100%;height:100%;" >
            <div class="item active" style="width:100%;height:100%;">
                <div id="pano2" style="width:100%;height:100%;">
					<noscript><table style="width:100%;height:100%;"><tr style="vertical-align:middle;"><td><div style="text-align:center;">ERROR:<br/><br/>Javascript not activated<br/><br/></div></td></tr></table></noscript>
					<script>
						embedpano({swf:"{{ asset('swf/krpano.swf') }}", xml:"{{ asset('xml/second.xml') }}", target:"pano2", html5:"auto", passQueryParameters:true});
					</script>
				</div>
            </div>
            <div class="item " style="width:100%;height:100%;">
                <div id="pano" style="width:100%;height:100%;">
					<noscript><table style="width:100%;height:100%;"><tr style="vertical-align:middle;"><td><div style="text-align:center;">ERROR:<br/><br/>Javascript not activated<br/><br/></div></td></tr></table></noscript>
					<script>
						embedpano({swf:"{{ asset('swf/krpano.swf') }}", xml:"{{ asset('xml/first.xml') }}", target:"pano", html5:"auto", passQueryParameters:true});
					</script>
				</div>

            </div>
            <div class="item" style="width:100%;height:100%;">
                <div id="pano3" style="width:100%;height:100%;">
					<noscript><table style="width:100%;height:100%;"><tr style="vertical-align:middle;"><td><div style="text-align:center;">ERROR:<br/><br/>Javascript not activated<br/><br/></div></td></tr></table></noscript>
					<script>
						embedpano({swf:"{{ asset('swf/krpano.swf') }}", xml:"{{ asset('xml/three.xml') }}", target:"pano3", html5:"auto", passQueryParameters:true});
					</script>
				</div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
