<!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
    	$(function(){
            $("nav li").click(function(){
                $("nav").find(".active").removeClass("active");
                $(this).addClass("active");
            });

    		$(".screen-video-item>a").hover(function(){
                $(this).find('.list-cover').animate({'opacity':0.8})
                $(this).find('.left-line').animate({'opacity':1,'left':'120px'});
                $(this).find('.right-line').animate({'opacity':1,'right':'120px'});
                $(this).find('.list-play').animate({'opacity':1,'bottom':'135px'});
            },function(){
                $(this).find('.left-line').animate({'opacity':0,'left':'50px'});
                $(this).find('.right-line').animate({'opacity':0,'right':'50px'});
                $(this).find('.list-play').animate({'opacity':0,'bottom':'50px'});
                $(this).find('.list-cover').animate({'opacity':0})
            });
    	});
    </script>