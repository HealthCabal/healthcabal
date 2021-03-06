<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title; ?></title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-64690490-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-64690490-1');

        var elements = document.getElementsByTagName("*");
        for (var id = 0; id < elements.length; ++id) {
            elements[id].oncontextmenu = null;
        }
    </script>


    <meta name="keywords" content="healthcabal, health cabal, health, cabal, health journal">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" type="text/css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:400,500,700,900%7CPlayfair+Display:400,700,700i,900,900i%7CWork+Sans:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Coustard&display=swap" rel="stylesheet">
    <!-- signatra-font -->
    <link rel="stylesheet" href="<?php echo $homeurl; ?>assets/css/signatra-font.css">

    <link rel="icon" type="image/png" href="<?php echo $homeurl; ?>assets/images/hc-favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $homeurl; ?>assets/images/hc-favicon.png" />
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="<?php echo $homeurl; ?>assets/images/hc-favicon.png">
    <link rel="stylesheet" href="<?php echo $homeurl; ?>assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo $homeurl; ?>assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="<?php echo $homeurl; ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo $homeurl; ?>assets/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo $homeurl; ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $homeurl; ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $homeurl; ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $homeurl; ?>assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo $homeurl; ?>assets/css/rev-settings.css"> -->

    <!--For Plugins external css-->
    <link rel="stylesheet" href="<?php echo $homeurl; ?>assets/css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="<?php echo $homeurl; ?>assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="<?php echo $homeurl; ?>assets/css/responsive.css" />
</head>

<body>
    <!--[if lt IE 10]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

    <!-- prelaoder -->
    <!-- <div id="preloader">
    <div class="preloader-wrapper">
        <div class="spinner"></div>
    </div>
    <div class="preloader-cancel-btn">
        <a href="#" class="btn btn-secondary prelaoder-btn">Cancel Preloader</a>
    </div>
</div> -->
    <!-- END prelaoder -->
    <style>
        /** 
        .bg-dark {
            background-color: #333333;
        }

        .no-transform {
            transform: none !important;
        }

        .demo-title-wraper {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .demo-title {
            font-size: 30px;
        }

        .nav-sticky.sticky-header {
            box-shadow: none !important;
        }

        .nav-brand {
            min-height: 80px;
            line-height: 80px;
        }
        **/


        body {
            background-color: #F7F9F9;
            color: darkslategrey
        }

        #mostpopular {
            height: 490px;
            margin-top: 10px;
            border-radius: 10px 10px 10px 0px;
            background-color: #BAF8FF;
            /* margin-top: 50px; */
        }

        .author-badge {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 50px;
            border: 1px solid red;
        }

        .h6 {
            color: #00323D
        }

        .static-hero {
            min-height: 300px;
        }

        #ourpromise {
            height: auto;
            background-color: #00323D;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            margin-top: 30px;
            -webkit-box-shadow: 8px 8px 1px -3px #EFF1F1;
            box-shadow: 8px 8px 1px -3px #EFF1F1;
            padding-bottom: 20px;
        }

        .text-white {
            color: white;
        }

        @media all and (min-width: 992px) {

            .featured-conditions {
                height: 150px;
                background-color: white;
                border-right-style: 3px solid red;
                border-radius: 10px;
                margin-right: 10;
            }

            .navbar {
                padding-top: 0;
                padding-bottom: 0;
            }


            .navbar .has-megamenu {
                position: static !important;
            }

            .navbar .megamenu {
                left: 0;
                right: 0;
                width: 100%;
                padding: 20px;
            }

            .navbar .nav-link {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
        }


        #topbar {
            background-color: #053641;
            height: auto;
            padding-bottom: 25px
        }

        .headtext {
            font-family: 'Coustard', serif;
            color: white;
        }

        .headsub {
            font-family: 'Open Sans', sans-serif;
            color: #04E4AE;
        }

        #homefeatured {
            margin: 10px;
            border-radius: 20px 20px 20px 0px;
            height: 490px;
            padding-right: 0px;
            background-color: white;
            overflow: hidden;
        }

        #homefeaturedimg {
            height: 400px;
            width: 100%;
            padding: 0px;
            margin: 0px;
            border-radius: 20px 20px 0px 0px;
        }

        #homefeaturedtitle {
            width: 100%
        }

        .fit-image {
            width: inherit;
            height: inherit;
            border-radius: 20px 20px 0px 0px;
            /* only if you want fixed height */
        }

        .titletext {
            color: rgb(5, 54, 65);
        }

        .grow {
            transition: all .2s ease-in-out;
        }

        .grow:hover {
            transform: scale(1.03);
            color: red;
        }



        .top-right-col {
            height: 150px;
            border-bottom-right-radius: 20px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            margin-top: 10px;
            margin-left: 5px;
        }

        #home-right-tower {
            background-color: white;
            height: 490px;
            border-bottom-right-radius: 20px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            margin-top: 10px;
            margin-left: 10px;
        }

        .homefeaturedimgs {
            width: 100%;
            padding: 0px;
            margin: 0px;
            border-radius: 20px 20px 0px 0px;
        }


        .homeboxes {
            margin: 10px;
            border-radius: 20px 20px 20px 0px;
            padding-right: 0px;
            background-color: white;
        }

        .posttitle {
            background-color: white;
            height: auto;
            border-bottom-right-radius: 10px;
        }

        .shadow-right {
            -webkit-box-shadow: 8px 8px 1px -3px #EFF1F1;
            box-shadow: 8px 8px 1px -3px #EFF1F1;
        }

        .second-row-home {
            background-color: white;
            height: 350px;
        }

        .center {
            text-align: center;
        }



        .home-buttons {
            background-color: #053641;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 0px;
            margin-top: 10px;
        }

        #teamblurb {
            padding-top: 50px;
        }

        #mobileconditions {
            display: none;
        }

        @media (max-width: 991.98px) {

            #homefeatured {
                margin: 10px;
                border-radius: 20px 20px 20px 0px;
                padding-right: 0px;
                background-color: white;
                overflow: hidden;
                height: auto;
            }

            #mostpopular {
                height: 490px;
                margin-top: 10px;
                border-radius: 10px 10px 10px 0px;
                background-color: #BAF8FF;
                margin-top: 50px;
            }


            .author-badge {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 90px;
                margin-top: 20px;
                /* border: 1px solid red; */
            }

            .top-right-col {
                height: auto;
                border-bottom-right-radius: 20px;
                border-top-left-radius: 20px;
                border-top-right-radius: 20px;
                margin-top: 10px;
                margin-left: 5px;
            }

            .static-hero {
                height: auto;
                margin-top: 50px;
                background-color: #00323D;
            }

            .featured-conditions {
                height: 150px;
                text-align: center;
            }

            #desktopconditions {
                display: none;
            }

            #mobileconditions {
                display: block;
            }

            .top-right-col {
                height: 330px;
                border-bottom-right-radius: 10px;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                width: 100%;
            }


            .mobile-divs-home {
                background-color: white;
                height: auto;
                border-bottom-right-radius: 20px;
                border-top-left-radius: 20px;
                border-top-right-radius: 20px;
                margin-top: 50px;
                margin-left: 10px;
                margin-bottom: 50px
            }

            .second-row-home {
                background-color: white;
                height: auto;
            }

            #homeright {
                height: auto;
                margin-bottom: 200px;
            }

            #space404 {
                padding-bottom: 50px
            }

            #ourteam {
                margin-top: 80px;
            }

            #teamblurb {
                padding-top: 50px;
            }

            .ad-sidebar {
                padding-top: 20px;
                margin: auto, 0px;
            }
        }

        .font-5 {
            font-size: 40px
        }


        /* Onyii's CSS code */
        .featuredhealth-conditions {
            width: 80%;
            margin-left: 10%;
        }

        @media screen and (max-width: 800px) {
            .featuredhealth-conditions {
                width: 100%;
                margin-left: 0px;
            }
        }

        .featuredhealth-conditions-features {
            font-size: large;
            font-size: 20px;
        }

        @media screen and (max-width: 800px) {
            .featuredhealth-conditions-features {
                width: 100%;
                margin-left: 0px;
                text-align: center;
            }
        }

        .featuredhealth-conditions-section {
            display: flex;
            justify-content: space-between;
        }

        @media screen and (max-width: 800px) {
            .featuredhealth-conditions-section {
                flex-direction: column;
                flex-flow: wrap;
                justify-content: space-around;
            }
        }

        .featuredhealth-conditions-content {
            width: 16%;
        }

        @media screen and (max-width: 670px) {
            .featuredhealth-conditions-content {
                width: 40%;
                /* background-color: blue; */
            }
        }

        /* @media screen and (min-width: 671px and max-width 800px) {
    .featuredhealth-conditions-content{
        width: 30%;
        background-color: blue;
    }
} */


        .featuredhealth-conditions-content-sub {
            width: 100%;
            height: 80%;
            background-color: white;
            text-align: center;
            border-radius: 8px;

        }


        @media screen and (max-width: 800px) {
            .featuredhealth-conditions-content-sub {
                background-color: unset;
                height: 80%;
            }
        }


        .featuredhealth-conditions-content-image {
            width: 70%;
            /* height: 90%; */
            margin-top: 3.5%;
        }

        @media screen and (max-width: 800px) {
            .featuredhealth-conditions-content-image {
                margin-top: 0px;
                margin-bottom: 0px;
                /* width: 60%; */
                /* height: 90%; */
            }
        }

        .healthcondition-title {
            height: 20%;
            text-align: center;
        }

        .healthcondition-tile-content {
            font-size: 17px;
        }



        .healthcondition-tile-content {
            font-size: 17px;
        }
    </style>
    <header class="xs-header header-style9 sticky-top" style="background-color: white;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-top:10px; padding-bottom: 10px">
            <div class="container">


                <!--ul>
                    <li class="nav-item dropdown has-megamenu">
                        <!--    a class="nav-link" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon icon-menu font-5"></span></a-->
                <!--div class="dropdown-menu megamenu">
                            <div class="row">
                                <div class="col-lg-3">
                                    <ul class="xs-icon-menu">
                                        <li class="single-menu-item"><a href="testimonial.html"><i class="icon icon-users"></i>Testimonials</a></li>
                                        <li class="single-menu-item"><a href="team.html"><i class="icon icon-user"></i>Teams</a></li>
                                        <li class="single-menu-item"><a href="menus.html"><i class="icon icon-menu"></i>Menus</a></li>
                                        <li class="single-menu-item"><a href="video-popup.html"><i class="icon icon-video-camera"></i>Video PopUp</a></li>
                                        <li class="single-menu-item"><a href="section-title.html"><i class="icon icon-pencil"></i>Section Title</a></li>
                                    </ul><!-- .xs-icon-menu END -->
                <!--/div>
                                <div class="col-lg-3">
                                    <ul class="xs-icon-menu">
                                        <li class="single-menu-item"><a href="contact-form.html"><i class="icon icon-email"></i>Contact Input</a></li>
                                        <li class="single-menu-item"><a href="call-to-actions.html"><i class="icon icon-email2"></i>Call To Actions</a></li>
                                        <li class="single-menu-item"><a href="subscribe-forms.html"><i class="icon icon-envelope3"></i>Subscribe Forms</a></li>
                                        <li class="single-menu-item"><a href="blog-block.html"><i class="icon icon-file-2"></i>Blog BLock</a></li>
                                        <li class="single-menu-item"><a href="service-block.html"><i class="icon icon-settings"></i>Service BLock</a></li>
                                    </ul><!-- .xs-icon-menu END -->
                <!--/div>
                                <div class="col-lg-3">
                                    <ul class="xs-icon-menu">
                                        <li class="single-menu-item"><a href="clients.html"><i class="icon icon-user-1"></i>Clients</a></li>
                                        <li class="single-menu-item"><a href="counter-up.html"><i class="icon icon-hourglass"></i>Fun Fact</a></li>
                                        <li class="single-menu-item"><a href="pie-chart.html"><i class="icon icon-bullhorn"></i>Pie Chart</a></li>
                                        <li class="single-menu-item"><a href="skill-bar.html"><i class="icon icon-growth"></i>Skill bar</a></li>
                                        <li class="single-menu-item"><a href="footer.html"><i class="icon icon-growth"></i>Footer</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="xs-icon-menu">
                                        <li class="single-menu-item"><a href="portfolios.html"><i class="icon icon-image"></i>Portfolio</a></li>
                                        <li class="single-menu-item"><a href="timeline.html"><i class="icon icon-agenda"></i>Time Line</a></li>
                                        <li class="single-menu-item"><a href="video-popup.html"><i class="icon icon-video-camera"></i>Video PopUp</a></li>
                                        <li class="single-menu-item"><a href="subscribe-forms.html"><i class="icon icon-envelope3"></i>Subscribe Forms</a></li>
                                        <li class="single-menu-item"><a href="pie-chart.html"><i class="icon icon-bullhorn"></i>Pie Chart</a></li>
                                    </ul>
                                </div>
                            </div><!-- .row END -->

                <!--/div> <!-- dropdown-mega-menu.// -->
                <!--/li>
                </ul-->
                <a class="navbar-brand col-md-3 mx-auto d-block" href="<?php echo $homeurl; ?>"><img src="<?php echo $homeurl; ?>assets/images/logo.png" class="text-center" width="200"></a>

                <!--form class="form-inline my-2 my-md-0">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form-->
            </div>
        </nav>

    </header>
    <!-- header section -->


    <!--https://bootstrap-menu.com/detail-megamenu.html-->