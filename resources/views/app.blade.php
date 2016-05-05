<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
        <title>官网</title>


        <link href="{{asset('/css/main.css')}}" rel="stylesheet" />
        <link href="{{asset('/css/app.css')}}" rel="stylesheet" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
            <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
                <div class="container">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#example-navbar" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">现代浏览器博物馆</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="example-navbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">首页 <span class="sr-only">(current)</span></a></li>
                            <!-- <li><a href="#">简介</a></li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">分类 <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                      <li><a href="#Chrome">Chrom</a></li>
                                      <li><a href="#Firefox">Firefox</a></li>
                                      <li><a href="#Safari">Safria</a></li>
                                      <li><a href="#Opear">Opera</a></li>
                                      <li><a href="#IE">IE</a></li>
                                </ul>
                            </li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal">关于</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <!-- Button trigger modal -->
           <!--  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
              Launch demo modal
            </button> -->

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">关于现代浏览器</h4>
                  </div>
                  <div class="modal-body">
                        <p class="text-primary">现代浏览器指该浏览器能够理解和支持HTML和XHTML，Cascading Style Sheets（CSS），ECMAScript及W3C Document Object Model（DOM）标准。</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                  </div>
                </div>
              </div>
            </div>


            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>

              <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{asset('/img/chrome-big.jpg')}}" alt="1 slide">
                        <div class="carousel-caption">
                            <h1>Chrome</h1>

                            <p>Google Chrome，又称Google浏览器，是一个由Google（谷歌）公司开发的网页浏览器。</p>

                            <p><a class="btn btn-lg btn-primary" href="http://www.google.cn/intl/zh-CN/chrome/browser/" role="button" target="_blank">点我下载</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('/img/firefox-big.jpg')}}" alt="2 slide">
                        <div class="carousel-caption">
                            <h1>Firefox</h1>

                            <p>Mozilla Firefox，中文名通常称为“火狐”或“火狐浏览器”，是一个开源网页浏览器。</p>

                            <p><a class="btn btn-lg btn-primary" href="http://www.firefox.com.cn/download/" target="_blank" role="button">点我下载</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('/img/safari-big.jpg')}}" alt="3 slide">
                        <div class="carousel-caption">
                            <h1>Safari</h1>

                            <p>Safari，是苹果计算机的最新操作系统Mac OS X中的浏览器。</p>

                            <p><a class="btn btn-lg btn-primary" href="http://www.apple.com/cn/safari/" target="_blank" role="button">点我下载</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('/img/opera-big.jpg')}}" alt="4 slide">
                        <div class="carousel-caption">
                            <h1>Opera</h1>

                            <p>Opera浏览器，是一款挪威Opera Software ASA公司制作的支持多页面标签式浏览的网络浏览器。</p>

                            <p><a class="btn btn-lg btn-primary" href="http://www.opera.com/zh-cn" target="_blank" role="button">点我下载</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('/img/ie-big.jpg')}}" alt="5 slide">
                        <div class="carousel-caption">
                            <h1>IE</h1>

                            <p>Internet Explorer，简称IE，是微软公司推出的一款网页浏览器。</p>

                            <p><a class="btn btn-lg btn-primary" href="http://ie.microsoft.com/" target="_blank"  role="button">点我下载</a></p>
                        </div>
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
            <div class="container" id="center-container">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="{{asset('/img/chrome-logo-small.jpg')}}" alt="1 slide">
                        <h1>Chrome</h1>
                        <p>Google Chrome，又称Google浏览器，是一个由Google（谷歌）公司开发的网页浏览器。</p>

                        <p><a class="btn btn-default" href="http://www.google.cn/intl/zh-CN/chrome/browser/" role="button" target="_blank">点我下载</a></p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="{{asset('/img/firefox-logo-small.jpg')}}" alt="1 slide">
                        <h1>Firefox</h1>
                        <p>Mozilla Firefox，中文名通常称为“火狐”或“火狐浏览器”，是一个开源网页浏览器。</p>

                        <p><a class="btn  btn-default" href="http://www.firefox.com.cn/download/" target="_blank" role="button">点我下载</a></p>
                    </div>
                     <div class="col-md-4 text-center">
                        <img src="{{asset('/img/safari-logo-small.jpg')}}" alt="1 slide">
                        <h1>Safari</h1>
                        <p>Safari，是苹果计算机的最新操作系统Mac OS X中的浏览器。</p>

                        <p><a class="btn btn-default" href="http://www.apple.com/cn/safari/" target="_blank" role="button">点我下载</a></p>
                    </div>

                </div>
                <hr class="divider">
            </div>
            <div class="container">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" id="tablist">
                    <li role="presentation" class="active"><a href="#Chrome" aria-controls="Chrome" role="tab" data-toggle="tab">Chrome</a></li>
                    <li role="presentation"><a href="#Firefox" aria-controls="Firefox" role="tab" data-toggle="tab">Firefox</a></li>
                    <li role="presentation"><a href="#Safari" aria-controls="Safari" role="tab" data-toggle="tab">Safari</a></li>
                    <li role="presentation"><a href="#Opear" aria-controls="Opear" role="tab" data-toggle="tab">Opear</a></li>
                    <li role="presentation"><a href="#IE" aria-controls="IE" role="tab" data-toggle="tab">IE</a></li>
                </ul>

                  <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="Chrome">
                        <div class="row feature ">
                            <div class="col-md-7 text-center ">
                                <h2 class="feature-heading">Google Chrome <span class="text-muted">使用最广的浏览器</span></h2>

                                <p class="lead">Google Chrome，又称Google浏览器，是一个由Google（谷歌）公司开发的网页浏览器。
                        该浏览器是基于其他开源软件所撰写，包括WebKit，目标是提升稳定性、速度和安全性，并创造出简单且有效率的使用者界面。</p>
                            </div>
                            <div class="col-md-5">
                                <img src="{{asset('/img/chrome-logo.jpg')}}" alt="Chrome">
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Firefox">
                        <div class="row feature">
                            <div class="col-md-5">
                                <img src="{{asset('/img/firefox-logo.jpg')}}" alt="Chrome">
                            </div>
                            <div class="col-md-7 text-center">
                                <h2 class="feature-heading">Mozilla Firefox <span class="text-muted">美丽的狐狸</span>
                                </h2>

                                <p class="lead">Mozilla Firefox，中文名通常称为“火狐”或“火狐浏览器”，是一个开源网页浏览器，
                                    使用Gecko引擎（非ie内核），支持多种操作系统如Windows、Mac和linux。</p>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Safari">
                        <div class="row feature">
                            <div class="col-md-7 text-center ">
                                 <h2 class="feature-heading">Safari <span class="text-muted">Mac用户首选</span></h2>

                                <p class="lead">Safari，是苹果计算机的最新操作系统Mac OS X中的浏览器，使用了KDE的KHTML作为浏览器的运算核心。
                                    Safari在2003年1月7日首度发行测试版，并成为Mac OS X v10.3与之后的默认浏览器，也是iPhone与IPAD和iPod touch的指定浏览器。</p>
                            </div>
                            <div class="col-md-5">
                                <img src="{{asset('/img/safari-logo.jpg')}}" alt="Chrome">
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Opear">
                        <div class="row feature">
                            <div class="col-md-5">
                                <img src="{{asset('/img/opera-logo.jpg')}}" alt="Chrome" />
                            </div>
                            <div class="col-md-7 text-center ">
                                <h2 class="feature-heading">Opera <span class="text-muted">小众但易用</span>
                                </h2>

                                <p class="lead">Opera浏览器，是一款挪威Opera Software ASA公司制作的支持多页面标签式浏览的网络浏览器。
                                    是跨平台浏览器可以在Windows、Mac和Linux三个操作系统平台上运行.</p>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="IE">
                        <div class="row feature">
                            <div class="col-md-7 text-center ">
                                <h2 class="feature-heading">IE <span class="text-muted">你懂的</span></h2>

                                <p class="lead">Internet Explorer，原称Microsoft Internet Explorer(6版本以前)和Windows Internet
                        Explorer(7，8，9，10版本)，
                        简称IE，是美国微软公司推出的一款网页浏览器。它采用的排版引擎(俗称内核)为Trident。</p>
                            </div>
                            <div class="col-md-5">
                                <img src="{{asset('/img/ie-logo.jpg')}}" alt="Chrome">
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="divider">
                <footer>
                    <a href="#top"><button class="pull-right btn btn-lg btn-primary">top</button></a>
                    <p>@supercjh</p>
                </footer>
            </div>
        <script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
        <!-- Bootstrap -->
        <!-- 新 Bootstrap 核心 CSS 文件 -->
        <!-- <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <!-- <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script> -->

        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <!-- <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

    <script>
        $(function(){
            $('#example-navbar .dropdown-menu a').click(function(){
                var href= $(this).attr('href');
                $('#tablist a[href="' + href + '"]').tab('show');
            })
        })
    </script>
    </body>
</html>