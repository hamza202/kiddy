<!DOCTYPE html>
<html lang="en-US">


<!-- Mirrored from html.creaws.com/kiddy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2018 11:08:33 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="img/cropped-favicon-192x192.png" />
    <title>Kiddy - Children HTML Template</title>
    <link rel='stylesheet' href='css/bootstrap.css' type='text/css' media='all' />
    <link rel='stylesheet' href='revslider/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/select2.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/animate.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/main.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/shop.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/custom.css' type='text/css' media='all' />

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/bootstrap.min.js'></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='revslider/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='revslider/js/jquery.themepunch.revolution.min.js'></script>
    <script type="text/javascript" src="revslider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revslider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revslider/js/extensions/revolution.extension.parallax.min.js"></script>    
    <link rel="icon" href="img/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="img/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="img/cropped-favicon-180x180.png">
    <meta name="msapplication-TileImage" content="img/cropped-favicon-270x270.png">
</head>

<body class="home page wide wave-style">
    <div class="page">
        <!-- top panel -->
        <?php include ('top-panel.php')?>
        <!-- / top panel -->
        <!-- slider and menu container -->

        <div class="header_box">
                <!-- menu -->
                <?php include ('Header.php')?>
                <!-- / menu -->
        </div>
        <section class="page_title wave">
            <div class="container">
                <div class="title">
                    <h1>Page</h1></div>
                <nav class="bread-crumbs"><a href="index.html">Home</a><i class="delimiter fa fa-chevron-right"></i><span class="current">Page</span></nav>
                <!-- .breadcrumbs -->
            </div>
            <canvas class="breadcrumbs" data-bg-color="#f8f2dc" data-line-color="#f9e8b2" height="71" width="1366" style="height: 71px; width: 1366px;"></canvas>
        </section>

            <!-- END REVOLUTION SLIDER -->

        <!-- / slider and menu container -->
        <!-- canvas -->
        <!-- / canvas -->
        <!-- main container -->
        <div id="main" class="site-main">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        Hello
                    </div>
                </div>
            </div>


            <!-- svg filter -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="0" style='display:none;'>
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                        <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                    </filter>
                </defs>
            </svg>
            <!-- / svg filter -->
        </div>
        <!-- #main -->
        <?php include ('footer.php')?>
    <script type='text/javascript' src='js/modernizr.js'></script>
    <script type='text/javascript' src='js/owl.carousel.js'></script>
    <script type='text/javascript' src='js/TweenMax.min.js'></script>
    <script type='text/javascript' src='js/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='js/jquery.fancybox.js'></script>
    <script type='text/javascript' src='js/select2.min.js'></script>
    <script type='text/javascript' src='js/wow.min.js'></script>
    <script type='text/javascript' src='js/jquery.validate.min.js'></script>
    <script type='text/javascript' src="js/jquery.form.min.js"></script>
    <script type='text/javascript' src='js/scripts.js'></script>
    <script type='text/javascript' src="js/jquery.tweet.js"></script>
</body>


</html>
