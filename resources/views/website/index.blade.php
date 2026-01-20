<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Home</title>

    <?php echo view('website/layout/header'); ?>

    <link rel="stylesheet" href="<?php echo asset('/website'); ?>/assets/cookies/demo.css">
    <script src="<?php echo asset('/website'); ?>/assets/cookies/demo.js" defer></script>

    <link rel="stylesheet" href="<?php echo asset('/website'); ?>/assets/cookies/cookieconsent.css" media="print"
        onload="this.media='all'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orestbida/iframemanager@v1.0/dist/iframemanager.css"
        media="print" onload="this.media='all'">

    <style>
        .rs-sbg {

            background-position: inherit;
        }

        * {
            user-select: text !important;

        }

        rs-module rs-layer,
        rs-module .rs-layer {
            white-space: normal !important;
        }

        .slick-prev:before,
        .slick-next:before {
            color: #5095cc !important;
            font-size: 56px !important;
            width: 40px !important;
            height: 40px !important;
            line-height: 40px !important;
            opacity: 1 !important;
        }

        .slider_txt {
            font-size: 23px !important;
            width: 600px !important;
            color: white;

        }

        @media screen and (max-width: 1000px) {
            .slider_txt {
                font-size: 35px !important;
                width: 700px !important;
                margin: 0px 0 !important;
            }

            .abouttxt {
                width: 100% !important;
            }

            .abouttxt p {
                font-size: 20px !important;
                padding: 20px
            }

            .mkdf-elements-holder.mkdf-responsive-mode-1024.mkdf-two-columns .mkdf-eh-item {
                display: flex;
                justify-content: center;
            }

            .mkdf-testimonial-content h6,
            .mkdf-testimonial-content span {

                font-size: 25px;

            }

            .mkdf-blog-list-holder.mkdf-bl-standard.mkdf-bl-four-columns .mkdf-bl-item {
                width: 100% !important;
            }

            .blog-mobile {
                font-size: 27px !important;
            }

            .read_btn {
                font-size: 15px !important;
            }
        }

        .mkdf-elements-holder .mkdf-eh-item {
            vertical-align: middle;
        }

        .mkdf-blog-list-holder.mkdf-bl-standard.mkdf-bl-four-columns .mkdf-bl-item {
            width: 32.33%;
        }

        .mkdf-blog-list-holder.mkdf-bl-standard:not(.mkdf-bl-one-column) .mkdf-bl-item {
            /* float: unset; */
        }

        @media only screen and (min-device-width: 1000px) and (max-device-width: 1390px) {
            .about-text {
                padding: 0% 0% 4.4% 5% !important;
            }
        }

        @media only screen and (min-device-width: 1400px) and (max-device-width: 1920px) {


            .about-text {
                padding: 0% 0% 4.4% 3% !important;
            }
        }

        .slick-prev::before {
            content: "<" !important;
        }

        .slick-next:before {
            content: '>' !important;
        }
        }
    </style>
    <style>
        .icon-bar {
            position: fixed;
            right: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .icon-bar a {
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
        }

        .icon-bar a:hover {
            background-color: #000;
        }

        .whatsapp {
            background: red !important;
            color: #00E676;
            border-bottom: 1px solid white;
        }

        .facebook {
            background: #5095cc;
            color: white;
            border-bottom: 1px solid white;
        }

        .twitter {
            background: #5095cc;
            color: white;
            border-bottom: 1px solid white;
        }

        .google {
            background: #5095cc;
            color: white;
            border-bottom: 1px solid white;
        }

        .whatsapp {
            background: #5095cc;
            color: white;
            border-bottom: 1px solid white;
        }

        .linkedin {
            background: #5095cc;
            color: white;
            border-bottom: 1px solid white;
        }

        .youtube {
            background: #5095cc;
            color: white;
            border-bottom: 1px solid white;
        }

        .content {
            margin-left: 75px;
            font-size: 30px;
        }

        @media only screen and (min-device-width: 300px) and (max-device-width: 767px) {

            .wpb_wrapper_mobile {
                margin: 40px !important;
            }
        }

        #rev_slider_2_2_wrapper .anwalt-navigation.tparrows:before {
            color: white !important;
        }
    </style>
    <style>
        .zoom-in-out-box {
            margin: 24px;
            /*width: 50px;*/
            /*height: 50px;*/
            /*background: #f50057;*/
            animation: zoom-in-zoom-out 1s ease infinite;
        }

        @keyframes zoom-in-zoom-out {
            0% {
                transform: scale(1, 1);
            }

            50% {
                transform: scale(1.5, 1.5);
            }

            100% {
                transform: scale(1, 1);
            }
        }
    </style>

    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/assets/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/assets/slick/slick-theme.css') }}">
</head>

<body
    class="home page-template page-template-full-width page-template-full-width-php page page-id-13 theme-anwalt anwalt-core-1.1.2 woocommerce-no-js anwalt-ver-1.4 mkdf-smooth-page-transitions mkdf-smooth-page-transitions-preloader mkdf-grid-1300 mkdf-sticky-header-on-scroll-down-up mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-below-image mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled mkdf-search-covers-header wpb-js-composer js-comp-ver-6.4.1 vc_responsive"
    itemscope itemtype="http://schema.org/WebPage">
    <!-- <div class="mkdf-smooth-transition-loader mkdf-mimic-ajax">
  <div class="mkdf-st-loader">
   <div class="mkdf-st-loader1">
    <div class="mkdf-reveal-image"><img src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/04/preloader-img.png"
      alt="spinner" />
     <div class="mkdf-spinner-revealer"></div>
    </div>
   </div>
  </div>
 </div> -->
    <div id="app" class="wrapper">
        <div class="icon-bar" style="z-index: 10000000000;">

            <a href="https://web.whatsapp.com/send?phone=4407802444938" target="_blank" class="whatsapp"><i
                    class="mkdf-social-icon-widget ion-social-whatsapp"></i></a>
            <a href="https://www.facebook.com/lloydsprsolicitors1/photos/?ref=page_internal" target="_blank"
                class="facebook"><i class="mkdf-social-icon-widget ion-social-facebook"></i></a>
            <a href="https://twitter.com/LloydsPRUK" target="_blank" class="linkedin"><i
                    class="mkdf-social-icon-widget ion-social-twitter"></i></a>
            <a href="https://www.linkedin.com/company/lloydsprsolicitors/about/" target="_blank" class="google"><i
                    class="mkdf-social-icon-widget ion-social-linkedin"></i></a>
            <a href="https://uk.trustpilot.com/review/lloydspr.com" target="_blank" class="twitter"><img
                    src="{{ URL::to('public/trust.png') }}" alt="Trust Pilot" /></a>

        </div>

        <?php echo view('website/layout/sidebar'); ?>
        <div class="mkdf-wrapper">
            <div class="mkdf-wrapper-inner">
                <div class="mkdf-top-bar" style="background-color:#5095cc;">
                    <div class="mkdf-vertical-align-containers">
                        <!--<div class="mkdf-position-left">-->
                        <!--	<div class="mkdf-position-left-inner">-->
                        <!--		<div id="text-2" class="widget widget_text mkdf-top-bar-widget">-->
                        <!--			<div class="textwidget">-->
                        <!--				<p>Opening hours / Monday &#8211; Friday / 09:30 &#8211; 5:00</p>-->
                        <!--			</div>-->
                        <!--		</div>-->
                        <!--	</div>-->
                        <!--</div>-->
                        <div class="mkdf-position-center">
                            <div class="mkdf-position-center-inner">
                            </div>
                        </div>
                        <div class="mkdf-position-right">
                            <div class="mkdf-position-right-inner">

                                <div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height">
                                    <span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw"
                                        style="vertical-align:middle;height:100%;border-left-style:solid;margin-left:30px"></span>
                                </div>

                                <span style="margin-left: 17px"> <strong style="font-size:17px">Emergency
                                        Number</strong>:<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover"
                                        data-hover-color="#6c5835"
                                        style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 6px;"
                                        href="tel:07802444938" target="_blank"> 07802444938</a> <span
                                        class="mkdf-social-icon-widget-holder mkdf-icon-has-hover"
                                        style="font-size: 26px;color: white">/</span> <a
                                        class="mkdf-social-icon-widget-holder mkdf-icon-has-hover"
                                        data-hover-color="#6c5835"
                                        style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 6px;"
                                        href="tel:07956845769" target="_blank">07956845769</a></span>

                            </div>
                        </div>
                    </div>
                </div>
                <?php echo view('website/layout/nav'); ?>
                <?php echo view('website/layout/nav-mobile'); ?>

                <a id='mkdf-back-to-top' href='#'>
                    <span class="mkdf-icon-stack" style="background-color:#5095cc; border:#5095cc;">
                        <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-chevron-up "></span> <span
                            aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-chevron-up "></span> </span>
                </a>
                <div class="mkdf-content">
                    <div class="mkdf-content-inner">
                        <div class="mkdf-full-width">
                            <div class="mkdf-full-width-inner">
                                <div class="mkdf-grid-row">
                                    <div class="mkdf-page-content-holder mkdf-grid-col-12">
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_revslider_element wpb_content_element">
                                                            <p class="rs-p-wp-fix"></p>
                                                            <rs-module-wrap id="rev_slider_2_2_wrapper"
                                                                data-source="gallery"
                                                                style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                                                <rs-module id="rev_slider_2_2" data-version="6.2.23">
                                                                    <rs-slides>
                                                                        @if ($slider)
                                                                            @foreach ($slider as $slider_key => $slider_val)
                                                                                <rs-slide
                                                                                    data-key="rs-{{ $slider_key }}"
                                                                                    data-title="Slide"
                                                                                    data-thumb="//anwalt.qodeinteractive.com/assets/wp-content/uploads/2018/03/h1-slider1-background-img-100x50.jpg"
                                                                                    data-anim="ei:d;eo:d;s:d;r:0;t:slideremoveleft;sl:d;"
                                                                                    data-firstanim="t:fade;s:300;sl:7;">
                                                                                    <img src="https://mtechserv-581124343.imgix.net/{{ $slider_val->image }}?q=75&auto=format"
                                                                                        title="Main Home"
                                                                                        data-parallax="8"
                                                                                        class="rev-slidebg"
                                                                                        data-no-retina>
                                                                                    <rs-layer
                                                                                        id="slider-2-slide-2-layer-3"
                                                                                        data-type="image"
                                                                                        data-xy="xo:300px,120px,75px,40px;y:m;yo:-143px,-131px,-127px,-203px;"
                                                                                        data-text="l:22;a:inherit;"
                                                                                        data-dim="w:216px,191px,191px,216px;h:51px,45px,45px,51px;"
                                                                                        data-vbility="t,t,t,f"
                                                                                        data-basealign="slide"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50px;tp:600;"
                                                                                        data-frame_1="tp:600;e:circ.out;st:700;sp:800;sR:700;"
                                                                                        data-frame_999="o:0;tp:600;e:nothing;st:w;sR:2000;"
                                                                                        style="z-index:5;"></rs-layer>
                                                                                    <rs-layer
                                                                                        id="slider-2-slide-2-layer-1"
                                                                                        data-type="text"
                                                                                        data-color="#5095cc"
                                                                                        data-xy="xo:300px,120px,75px,40px;y:m;yo:-52px,-51px,-48px,-111px;"
                                                                                        data-dim="w:auto,auto,auto,303px;h:auto,auto,auto,111px;"
                                                                                        data-basealign="slide"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50px;tp:600;"
                                                                                        data-frame_1="tp:600;e:circ.out;st:900;sp:800;sR:900;"
                                                                                        data-frame_999="o:0;tp:600;st:w;sR:1800;"
                                                                                        style="z-index:6; line-height: 70px; padding: 12px;">
                                                                                        <h5 class="slider_txt"
                                                                                            style="background: rgba(0, 0, 0, 0.5);padding:10px 10px;">
                                                                                            <strong>
                                                                                                {{ $slider_val->title }}
                                                                                                -Legal 500 </strong>
                                                                                        </h5>
                                                                                        <div
                                                                                            style="display: flex; align-items:center;">
                                                                                            <h5 class="slider_txt"
                                                                                                style="width: auto !important; ">
                                                                                                <!--<strong> {{ $slider_val->sub_title }}</strong>-->
                                                                                            </h5>
                                                                                            <!--<h5 style="margin-top: 0px !important;  margin-left: 10px !important; font-size:20px !important;font-family: Monospace!important;">  </h5>-->
                                                                                        </div>
                                                                                    </rs-layer>

                                                                                    <rs-layer
                                                                                        id="slider-2-slide-2-layer-4"
                                                                                        data-type="text"
                                                                                        data-color="#000000"
                                                                                        data-xy="xo:300px,120px,75px,40px;y:m;yo:142px,128px,122px,123px;"
                                                                                        data-text="l:22;a:inherit;"
                                                                                        data-basealign="slide"
                                                                                        data-rsp_o="on"
                                                                                        data-rsp_bd="on"
                                                                                        data-frame_0="y:50px;tp:600;"
                                                                                        data-frame_1="tp:600;e:circ.out;st:1300;sp:800;sR:1300;"
                                                                                        data-frame_999="o:0;tp:600;st:w;sR:1400;"
                                                                                        style="z-index:8;">
                                                                                        <a href="tel:07802444932"
                                                                                            class="mkdf-btn mkdf-btn-medium mkdf-btn-solid"
                                                                                            style="width: 205px !important;">
                                                                                            <span
                                                                                                class="mkdf-btn-text">Contact
                                                                                                Us</span>
                                                                                        </a>
                                                                                    </rs-layer>
                                                                                    <rs-layer
                                                                                        id="slider-2-slide-2-layer-5"
                                                                                        data-type="text"
                                                                                        data-color="#000000"
                                                                                        data-xy="xo:500px,320px,275px,40px;y:m;yo:142px,128px,122px,180px;"
                                                                                        data-text="l:22;a:inherit;"
                                                                                        data-vbility="t,t,t,f"
                                                                                        data-basealign="slide"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50px;tp:600;"
                                                                                        data-frame_1="tp:600;e:circ.out;st:1300;sp:800;sR:1300;"
                                                                                        data-frame_999="o:0;tp:600;st:w;sR:1400;"
                                                                                        style="z-index:9;">

                                                                                    </rs-layer>
                                                                                </rs-slide>
                                                                            @endforeach
                                                                        @endif
                                                                        <!-- <rs-slide data-key="rs-14" data-title="Slide" data-thumb="//anwalt.qodeinteractive.com/assets/wp-content/uploads/2018/03/h1-slider1-background-img-100x50.jpg" data-anim="ei:d;eo:d;s:d;r:0;t:slideremoveleft;sl:d;" data-firstanim="t:fade;s:300;sl:7;">
                  <img src="{{ asset('/website/assets/wp-content/uploads/2018/03/port-img-2-1100x550.jpg') }}" title="Main Home" data-parallax="8" class="rev-slidebg" data-no-retina>
                  <rs-layer id="slider-2-slide-14-layer-3" data-type="image" data-xy="xo:300px,120px,75px,40px;y:m;yo:-143px,-131px,-127px,-203px;" data-text="l:22;a:inherit;" data-dim="w:216px,191px,191px,216px;h:51px,45px,45px,51px;" data-vbility="t,t,t,f" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:700;sp:800;sR:700;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:2000;" style="z-index:5;">
                  </rs-layer>
                  <rs-layer id="slider-2-slide-14-layer-1" data-type="text" data-color="#5095cc" data-xy="xo:300px,120px,75px,40px;y:m;yo:-52px,-51px,-48px,-111px;" data-text="w:nowrap,nowrap,nowrap,normal;s:80,70,60,45;l:110,90,80,55;a:inherit;" data-dim="w:auto,auto,auto,303px;h:auto,auto,auto,111px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:900;sp:800;sR:900;" data-frame_999="o:0;tp:600;st:w;sR:1800;" style="z-index:6;font-family:Lustria; line-height: 70px; padding: 12px;">
                   <h3>
                    Aa firm Described as ‘Remarkable’ and
                    one
                    that <br>
                    ‘Genuinely Impresses’ – Legal 500
                   </h3>
                  </rs-layer>
                  <rs-layer id="slider-2-slide-14-layer-4" data-type="text" data-color="#000000" data-xy="xo:300px,120px,75px,40px;y:m;yo:142px,128px,122px,123px;" data-text="l:22;a:inherit;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:1300;sp:800;sR:1300;" data-frame_999="o:0;tp:600;st:w;sR:1400;" style="z-index:8;">
                   <a itemprop="url" href="javascript:void(0)" target="_self" class="mkdf-btn mkdf-btn-medium mkdf-btn-solid" style="background-color:#5095cc ;">
                    <span class="mkdf-btn-text">Contact Us</span>
                   </a>
                  </rs-layer>
                  <rs-layer id="slider-2-slide-14-layer-5" data-type="text" data-color="#000000" data-xy="xo:500px,320px,275px,40px;y:m;yo:142px,128px,122px,180px;" data-text="l:22;a:inherit;" data-vbility="t,t,t,f" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:1300;sp:800;sR:1300;" data-frame_999="o:0;tp:600;st:w;sR:1400;" style="z-index:9;">

                  </rs-layer>
                 </rs-slide> -->

                                                                        <!-- <rs-slide data-key="rs-5" data-title="Slide" data-thumb="//anwalt.qodeinteractive.com/assets/wp-content/uploads/2018/03/h1-slider2-background-img-100x50.jpg" data-anim="ei:d;eo:d;s:d;r:0;t:slideremoveleft;sl:d;">
                  <img src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/03/h1-slider2-background-img.jpg" title="Main Home" data-parallax="8" class="rev-slidebg" data-no-retina>
                  <rs-layer id="slider-2-slide-5-layer-1" data-type="image" data-xy="xo:300px,120px,75px,40px;y:m;yo:-143px,-131px,-127px,-203px;" data-text="l:22;a:inherit;" data-dim="w:216px,191px,191px,216px;h:51px,45px,45px,51px;" data-vbility="t,t,t,f" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:700;sp:800;sR:700;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:2000;" style="z-index:5;">

                  </rs-layer>
                  <rs-layer id="slider-2-slide-5-layer-2" data-type="text" data-color="#5095cc" data-xy="xo:300px,120px,75px,40px;y:m;yo:-52px,-51px,-48px,-112px;" data-text="w:nowrap,nowrap,nowrap,normal;s:80,70,60,45;l:110,90,80,55;a:inherit;" data-dim="w:auto,auto,auto,303px;h:auto,auto,auto,111px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:900;sp:800;sR:900;" data-frame_999="o:0;tp:600;st:w;sR:1800;" style="z-index:6;font-family:Lustria;  line-height: 70px; padding: 12px;">
                   <h3> Leading Law Firm <br>Specialising in
                    Criminal Defence </h3>
                  </rs-layer>

                  <rs-layer id="slider-2-slide-5-layer-4" data-type="text" data-color="#000000" data-xy="xo:300px,120px,75px,40px;y:m;yo:142px,128px,122px,122px;" data-text="l:22;a:inherit;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:1300;sp:800;sR:1300;" data-frame_999="o:0;tp:600;st:w;sR:1400;" style="z-index:8;"><a itemprop="url" href="#" target="_self" class="mkdf-btn mkdf-btn-medium mkdf-btn-solid" style="background-color:#5095cc ;">
                    <span class="mkdf-btn-text">Contact
                     Us</span>
                   </a>
                  </rs-layer>
                  <rs-layer id="slider-2-slide-5-layer-5" data-type="text" data-color="#000000" data-xy="xo:500px,320px,275px,40px;y:m;yo:142px,128px,122px,180px;" data-text="l:22;a:inherit;" data-vbility="t,t,t,f" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50px;tp:600;" data-frame_1="tp:600;e:circ.out;st:1300;sp:800;sR:1300;" data-frame_999="o:0;tp:600;st:w;sR:1400;" style="z-index:9;">

                  </rs-layer>
                 </rs-slide> -->

                                                                        </rs-layer>

                                                                        </rs-layer>
                                                                        </rs-slide>
                                                                    </rs-slides>
                                                                </rs-module>
                                                                <!--	<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>-->
                                                                <script type="text/javascript">
                                                                    setREVStartSize({
                                                                        c: 'rev_slider_2_2',
                                                                        rl: [1920, 1720, 1025, 480],
                                                                        el: [],
                                                                        gw: [1300, 1100, 600, 300],
                                                                        gh: [760, 500, 550, 450],
                                                                        type: 'standard',
                                                                        justify: '',
                                                                        layout: 'fullwidth',
                                                                        mh: "0"
                                                                    });
                                                                    var revapi2,
                                                                        tpj;

                                                                    function revinit_revslider22() {
                                                                        jQuery(function() {
                                                                            tpj = jQuery;
                                                                            revapi2 = tpj("#rev_slider_2_2");
                                                                            if (revapi2 == undefined || revapi2.revolution == undefined) {
                                                                                revslider_showDoubleJqueryError("rev_slider_2_2");
                                                                            } else {
                                                                                revapi2.revolution({
                                                                                    sliderLayout: "fullwidth",
                                                                                    duration: 3500,
                                                                                    visibilityLevels: "1920,1720,1025,480",
                                                                                    gridwidth: "1300,1100,600,300",
                                                                                    gridheight: "760,500,550,450",
                                                                                    perspectiveType: "local",
                                                                                    responsiveLevels: "1920,1720,1025,480",
                                                                                    progressBar: {
                                                                                        disableProgressBar: true
                                                                                    },
                                                                                    navigation: {
                                                                                        keyboardNavigation: true,
                                                                                        mouseScrollNavigation: false,
                                                                                        onHoverStop: false,
                                                                                        arrows: {
                                                                                            enable: true,
                                                                                            style: "anwalt-navigation",
                                                                                            hide_onmobile: true,
                                                                                            hide_under: 1025,
                                                                                            left: {

                                                                                            },
                                                                                            right: {

                                                                                            }
                                                                                        },
                                                                                        bullets: {
                                                                                            enable: true,
                                                                                            tmp: "",
                                                                                            style: "anwalt-navigation",
                                                                                            hide_over: 1024,
                                                                                            space: 15
                                                                                        }
                                                                                    },
                                                                                    parallax: {
                                                                                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                                                                                        type: "mouse"
                                                                                    },
                                                                                    viewPort: {
                                                                                        enable: true,
                                                                                        visible_area: "1%"
                                                                                    },
                                                                                    fallbacks: {
                                                                                        allowHTML5AutoPlayOnAndroid: true
                                                                                    },
                                                                                });
                                                                            }

                                                                        });
                                                                    } // End of RevInitScript
                                                                    var once_revslider22 = false;
                                                                    if (document.readyState === "loading") {
                                                                        document.addEventListener('readystatechange', function() {
                                                                            if ((document.readyState === "interactive" || document.readyState === "complete") && !
                                                                                once_revslider22) {
                                                                                once_revslider22 = true;
                                                                                revinit_revslider22();
                                                                            }
                                                                        });
                                                                    } else {
                                                                        once_revslider22 = true;
                                                                        revinit_revslider22();
                                                                    }
                                                                </script>
                                                                <script>
                                                                    var htmlDivCss = unescape(
                                                                        "%23rev_slider_2_2_wrapper%20.anwalt-navigation.tparrows%20%7B%0A%20%20width%3A%2040px%3B%0A%20%20height%3A%2040px%3B%0A%20%20line-height%3A%2040px%3B%0A%20%20background%3A%20transparent%3B%0A%20%7D%0A%20%23rev_slider_2_2_wrapper%20.anwalt-navigation.tparrows%3Abefore%20%7B%0A%20color%3A%20%23000%3B%0A%20font-size%3A36px%3B%0A%20font-family%3A%20%22Linearicons-Free%22%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%23rev_slider_2_2_wrapper%20.anwalt-navigation.tparrows%3Ahover%3Abefore%20%7B%0A%20%20color%3A%20%23aa9166%3B%0A%7D%0A%20%20%0A%23rev_slider_2_2_wrapper%20.anwalt-navigation.tparrows.tp-leftarrow%3Abefore%7B%0A%20%20content%3A%20%22%5Ce875%22%3B%0A%7D%0A%0A%23rev_slider_2_2_wrapper%20.anwalt-navigation.tparrows.tp-rightarrow%3Abefore%7B%0A%20%20content%3A%20%22%5Ce876%22%3B%0A%7D%0A%23rev_slider_2_2_wrapper%20.anwalt-navigation%20.tp-bullet%7B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20width%3A%2010px%3B%0A%20%20height%3A%2010px%3B%0A%20%20margin%3A%200%204px%3B%0A%20%20border-radius%3A%203em%3B%0A%20%20background-color%3A%20transparent%3B%0A%20%20border%3A%202px%20solid%20%23c2aa80%3B%0A%20%20box-sizing%3A%20border-box%3B%0A%20%20-webkit-transition%3A%20background-color%20.2s%20ease-out%2Cborder%20.2s%20ease-out%3B%0A%20%20-moz-transition%3A%20background-color%20.2s%20ease-out%2Cborder%20.2s%20ease-out%3B%0A%20%20transition%3A%20background-color%20.2s%20ease-out%2Cborder%20.2s%20ease-out%3B%0A%7D%0A%23rev_slider_2_2_wrapper%20.anwalt-navigation%20.tp-bullet.selected%2C%0A%23rev_slider_2_2_wrapper%20.anwalt-navigation%20.tp-bullet%3Ahover%20%7B%0A%20%20background-color%3A%20%23c2aa80%3B%0A%7D%0A"
                                                                        );
                                                                    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                                    if (htmlDiv) {
                                                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                                    } else {
                                                                        var htmlDiv = document.createElement('div');
                                                                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                                        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                                    }
                                                                </script>
                                                                <script>
                                                                    var htmlDivCss = unescape("%0A%0A%0A%0A%0A%0A");
                                                                    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                                    if (htmlDiv) {
                                                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                                    } else {
                                                                        var htmlDiv = document.createElement('div');
                                                                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                                        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                                    }
                                                                </script>
                                                            </rs-module-wrap>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mkdf-row-grid-section-wrapper ">
                                            <div class="mkdf-row-grid-section">
                                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1520428609185"
                                                    style="padding-top: 0px !important;">
                                                    <div class="mkdf-row-grid-section-wrapper ">
                                                        <div class="mkdf-row-grid-section">
                                                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1522406045702"
                                                                style="padding-top: 50px !important; padding-bottom: 25px !important;">
                                                                <div
                                                                    class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-12">
                                                                    <div class="vc_column-inner">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="mkdf-section-title-holder  "
                                                                                style="text-align: center">
                                                                                <div class="mkdf-st-inner">
                                                                                    <h3 class="mkdf-st-title">
                                                                                        Our Services </h3>
                                                                                    <div
                                                                                        class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                                                                                        <div class="mkdf-separator"
                                                                                            style="width: 143px;border-bottom-width: 2px">
                                                                                        </div>
                                                                                    </div>
                                                                                    <h6 class="mkdf-st-text">
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @if ($expertise)
                                                        <section class="vertical-center-3 slider">
                                                            @foreach ($expertise as $expertise_val)
                                                                <div
                                                                    class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-offset-1 vc_col-md-5">
                                                                    <div class="vc_column-inner">
                                                                        <div class="wpb_wrapper">
                                                                            <div
                                                                                class="mkdf-iwt clearfix  mkdf-iwt-icon-top mkdf-iwt-icon-medium ">
                                                                                <!--<div class="mkdf-iwt-icon">-->
                                                                                <!--	<a itemprop="url" href="{{ url('/expertise') . '/' . $expertise_val->id }}" target="_self">-->
                                                                                <!--		<span class="mkdf-icon-shortcode mkdf-normal    mkdf-icon-medium">-->
                                                                                <!--			<span class="mkdf-icon-bckg-holder"></span>-->
                                                                                <!--<i class="mkdf-icon-linea-icon icon-basic-message-multiple mkdf-icon-element" style="font-size:55px"></i> </span>-->
                                                                                <!--			<img src="{{ asset('/images') . '/' . $expertise_val->image }}" alt="Text">-->
                                                                                <!--	</a>-->
                                                                                <!--</div>-->
                                                                                <div class="mkdf-iwt-content">
                                                                                    <h5 class="mkdf-iwt-title"
                                                                                        style="margin-top: 9px">
                                                                                        <a itemprop="url"
                                                                                            href="{{ url('/expertise') . '/' . str_replace(' ', '_', $expertise_val['title']) }}"
                                                                                            target="_self">
                                                                                            <span
                                                                                                class="mkdf-iwt-title-text blog-mobile">{{ $expertise_val->title }}</span>
                                                                                        </a>
                                                                                    </h5>

                                                                                    <!-- <a itemprop="url" href="expertise.html" target="_self" class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-icon mkdf-btn-icon-animate"> -->
                                                                                    <a itemprop="url"
                                                                                        aria-label="go TO Detail view about expertuise"
                                                                                        style="font-size:8px"
                                                                                        href="{{ url('/expertise') . '/' . str_replace(' ', '_', $expertise_val['title']) }}"
                                                                                        target="_self"
                                                                                        class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-icon mkdf-btn-icon-animate">
                                                                                        Read More About
                                                                                        {{ $expertise_val->title }}
                                                                                        <!--<span class="mkdf-btn-text read_btn" aria-label="go TO Detail view about expertuise"></span>
                    <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-arrow-right "></span> -->
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vc_empty_space"
                                                                                style="height: 58px"><span
                                                                                    class="vc_empty_space_inner"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </section>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row wpb_row vc_row-fluid call-us vc_custom_1522659030108 mkdf-content-aligment-center"
                                            style="background-color:#5095cc">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <h4><span style="color: #ffffff;">Emergency? Call us
                                                                        now</span> <a
                                                                        href="tel:07802444938">+07802444938</a> <span
                                                                        style="color: white;margin-right: -2px;"> /
                                                                    </span> <a href="tel:+07956845769">+07956845769</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mkdf-row-grid-section-wrapper mb-4">
                                            <div class="mkdf-row-grid-section abouttxt"
                                                style="margin-top: 0px; margin-bottom: 70px;">
                                                <div class="vc_row wpb_row vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div
                                                                    class="mkdf-elements-holder mkdf-two-columns  mkdf-responsive-mode-1024 ">
                                                                    <div class="mkdf-eh-item     "
                                                                        data-item-class="mkdf-eh-custom-7575"
                                                                        data-1024-1366="0% 7% 4.4% 8% "
                                                                        data-368-1024="103px 10px 0px"
                                                                        data-680-768="103px 53px 0px"
                                                                        data-680="101px 0% 0px">
                                                                        <div class="mkdf-eh-item-inner">
                                                                            <div class="mkdf-eh-item-content mkdf-eh-custom-7575"
                                                                                style="padding: 0 5% 4% 4%">
                                                                                <div
                                                                                    class="wpb_text_column wpb_content_element ">
                                                                                    <div class="wpb_wrapper">
                                                                                        <!-- <h4>About Us</h4> -->
                                                                                        <div
                                                                                            class="mkdf-row-grid-section-wrapper ">
                                                                                            <div
                                                                                                class="mkdf-row-grid-section">
                                                                                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1522406045702"
                                                                                                    style="padding-top: 50px !important; padding-bottom: 25px !important;">
                                                                                                    <div
                                                                                                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-12">
                                                                                                        <div
                                                                                                            class="vc_column-inner">
                                                                                                            <div
                                                                                                                class="wpb_wrapper">
                                                                                                                <div class="mkdf-section-title-holder  "
                                                                                                                    style="text-align: center">
                                                                                                                    <div
                                                                                                                        class="mkdf-st-inner">
                                                                                                                        <h3
                                                                                                                            class="mkdf-st-title">
                                                                                                                            About
                                                                                                                            Us
                                                                                                                        </h3>
                                                                                                                        <div
                                                                                                                            class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                                                                                                                            <div class="mkdf-separator"
                                                                                                                                style="width: 143px;border-bottom-width: 2px">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <h6
                                                                                                                            class="mkdf-st-text">
                                                                                                                        </h6>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="vc_empty_space"
                                                                                    style="height: 7px"><span
                                                                                        class="vc_empty_space_inner"></span>
                                                                                </div>
                                                                                <div
                                                                                    class="wpb_text_column wpb_content_element ">
                                                                                    <div class="wpb_wrapper">
                                                                                        <p
                                                                                            style="text-align: justify;color:#656565!important">
                                                                                            <?php echo $about->discription; ?>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mkdf-eh-item"
                                                                        data-item-class="mkdf-eh-custom-4679"
                                                                        data-1024-1366="140px 8%"
                                                                        data-768-1024="70px 133px 140px"
                                                                        data-680-768="70px 53px 140px"
                                                                        data-680="70px 0% 140px">
                                                                        <div class="mkdf-eh-item-inner"
                                                                            style="margin-top: 153px;">
                                                                            <div class="mkdf-eh-item-content mkdf-eh-custom-4679"
                                                                                style="padding: 0px!important;">
                                                                                <div
                                                                                    class="mkdf-single-image-holder   ">
                                                                                    <div class="mkdf-si-inner">
                                                                                        <img width="800"
                                                                                            height="534"
                                                                                            src="https://mtechserv-737011741.imgix.net/h1-img-1111.jpg?ar=2800%3A1400&auto=format%2Ccompress&crop=focalpoint&fit=crop&fp-x=0.49&fp-y=0.552&fp-z=1&ixlib=php-4.1.0&w=1200"
                                                                                            class="attachment-full size-full"
                                                                                            alt="g"
                                                                                            loading="lazy"
                                                                                            srcset="https://mtechserv-737011741.imgix.net/h1-img-1111.jpg?ar=2800%3A1400&auto=format%2Ccompress&crop=focalpoint&fit=crop&fp-x=0.49&fp-y=0.552&fp-z=1&ixlib=php-4.1.0&w=1200 800w"
                                                                                            sizes="(max-width: 800px) 100vw, 800px" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_text_column wpb_content_element about-text ">
                                                            <div class="wpb_wrapper wpb_wrapper_mobile">
                                                                <p class="MsoNormal"
                                                                    style="margin-bottom: 7.5pt;line-height: 1.2;background: white;text-align: justify;width: 100%;">
                                                                    <span
                                                                        style="font-family: arial, helvetica, sans-serif; color: #656565; ">Our
                                                                        expertise is recognised in the Legal 500, where
                                                                        it is noted that one of Lloyds PR Solicitors'
                                                                        'key strengths is its ‘ability to assimilate
                                                                        large volumes of complex material and undertake
                                                                        forensic accountancy analysis, in order to
                                                                        reduce its clients’ liabilities'. Our team are
                                                                        trained in forensically analysing extensive and
                                                                        complex evidence. At Lloyds PR Solicitors we
                                                                        highly value technological developments, and
                                                                        this area is constantly being invested in and
                                                                        updated. This is important when tackling any
                                                                        allegation, particularly in financial crime.
                                                                        This allows us to work efficiently and ensures
                                                                        that we dissect the case mounted against our
                                                                        clients, to provide sound and robust advice at
                                                                        early stages </span></p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="mkdf-row-grid-section-wrapper mkdf-content-aligment-center" style="background-color:rgba(194,170,128,0.08)">-->
                                        <!--	<div class="mkdf-row-grid-section">-->
                                        <!--		<div class="vc_row wpb_row vc_row-fluid vc_custom_1522405812816">-->
                                        <!--			<div class="wpb_column vc_column_container vc_col-sm-12">-->
                                        <!--				<div class="vc_column-inner">-->
                                        <!--					<div class="wpb_wrapper">-->
                                        <!--						<div class="mkdf-section-title-holder  " style="text-align: center">-->
                                        <!--							<div class="mkdf-st-inner">-->
                                        <!--								<h3 class="mkdf-st-title">-->
                                        <!--									Why we are different </h3>-->
                                        <!--								<div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">-->
                                        <!--									<div class="mkdf-separator" style="width: 143px;border-bottom-width: 2px">-->
                                        <!--									</div>-->
                                        <!--								</div>-->
                                        <!--								<h6 class="mkdf-st-text">-->
                                        <!--									Best law practices. Expertise in various law-->
                                        <!--									fields. Great results.-->
                                        <!--								</h6>-->
                                        <!--							</div>-->
                                        <!--						</div>-->
                                        <!--					</div>-->
                                        <!--				</div>-->
                                        <!--			</div>-->
                                        <!--		</div>-->
                                        <!--	</div>-->
                                        <!--</div>-->
                                        <!--<div class="mkdf-row-grid-section-wrapper mkdf-content-aligment-center" style="background-color:rgba(194,170,128,0.08)">-->
                                        <!--	<div class="mkdf-row-grid-section">-->
                                        <!--		<div class="vc_row wpb_row vc_row-fluid vc_custom_1521814924146">-->
                                        <!--			<div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1">-->
                                        <!--				<div class="vc_column-inner">-->
                                        <!--					<div class="wpb_wrapper">-->
                                        <!--						<div class="mkdf-single-image-holder   ">-->
                                        <!--							<div class="mkdf-si-inner">-->
                                        <!--								<img width="800" height="492" src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/03/h1-img-2.jpg" class="attachment-full size-full" alt="i" loading="lazy" srcset="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/03/h1-img-2.jpg 800w, assets/wp-content/uploads/2018/03/h1-img-2-300x185.jpg 300w, assets/wp-content/uploads/2018/03/h1-img-2-768x472.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" />-->
                                        <!--							</div>-->
                                        <!--						</div>-->
                                        <!--						<div class="vc_empty_space" style="height: 37px"><span class="vc_empty_space_inner"></span></div>-->
                                        <!--						<div class="mkdf-section-title-holder  " style="padding: 0 6%;text-align: center">-->
                                        <!--							<div class="mkdf-st-inner">-->
                                        <!--								<h5 class="mkdf-st-title">-->
                                        <!--									Best law practices </h5>-->
                                        <!--								<p class="mkdf-st-text" style="margin-top: 9px">-->
                                        <!--									Lorem ipsum dolor sit amet, consectetur adi-->
                                        <!--									piscing sed do eiusmod tempor icididu </p>-->
                                        <!--							</div>-->
                                        <!--						</div>-->
                                        <!--						<div class="mkdf-separator-holder clearfix  mkdf-separator-center " style="margin-top: 23px">-->
                                        <!--							<div class="mkdf-separator" style="border-color: #5095cc;width: 100px;border-bottom-width: 2px">-->
                                        <!--							</div>-->
                                        <!--						</div>-->
                                        <!--						<div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>-->
                                        <!--					</div>-->
                                        <!--				</div>-->
                                        <!--			</div>-->
                                        <!--			<div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1">-->
                                        <!--				<div class="vc_column-inner">-->
                                        <!--					<div class="wpb_wrapper">-->
                                        <!--						<div class="mkdf-single-image-holder   ">-->
                                        <!--							<div class="mkdf-si-inner">-->
                                        <!--								<img width="800" height="492" src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/03/h1-img-3.jpg" class="attachment-full size-full" alt="i" loading="lazy" srcset="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/03/h1-img-3.jpg 800w, assets/wp-content/uploads/2018/03/h1-img-3-300x185.jpg 300w, assets/wp-content/uploads/2018/03/h1-img-3-768x472.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" />-->
                                        <!--							</div>-->
                                        <!--						</div>-->
                                        <!--						<div class="vc_empty_space" style="height: 37px"><span class="vc_empty_space_inner"></span></div>-->
                                        <!--						<div class="mkdf-section-title-holder  " style="padding: 0 6%;text-align: center">-->
                                        <!--							<div class="mkdf-st-inner">-->
                                        <!--								<h5 class="mkdf-st-title">-->
                                        <!--									Efficiency &amp; Trust </h5>-->
                                        <!--								<p class="mkdf-st-text" style="margin-top: 9px">-->
                                        <!--									Lorem ipsum dolor sit amet, consectetur adi-->
                                        <!--									piscing sed do eiusmod tempor icididu </p>-->
                                        <!--							</div>-->
                                        <!--						</div>-->
                                        <!--						<div class="mkdf-separator-holder clearfix  mkdf-separator-center " style="margin-top: 23px">-->
                                        <!--							<div class="mkdf-separator" style="border-color: #5095cc;width: 100px;border-bottom-width: 2px">-->
                                        <!--							</div>-->
                                        <!--						</div>-->
                                        <!--						<div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>-->
                                        <!--					</div>-->
                                        <!--				</div>-->
                                        <!--			</div>-->
                                        <!--			<div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1">-->
                                        <!--				<div class="vc_column-inner">-->
                                        <!--					<div class="wpb_wrapper">-->
                                        <!--						<div class="mkdf-single-image-holder   ">-->
                                        <!--							<div class="mkdf-si-inner">-->
                                        <!--								<img width="800" height="492" src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/03/h1-img-4.jpg" class="attachment-full size-full" alt="i" loading="lazy" srcset="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/03/h1-img-4.jpg 800w, assets/wp-content/uploads/2018/03/h1-img-4-300x185.jpg 300w, assets/wp-content/uploads/2018/03/h1-img-4-768x472.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" />-->
                                        <!--							</div>-->
                                        <!--						</div>-->
                                        <!--						<div class="vc_empty_space" style="height: 37px"><span class="vc_empty_space_inner"></span></div>-->
                                        <!--						<div class="mkdf-section-title-holder  " style="padding: 0 6%;text-align: center">-->
                                        <!--							<div class="mkdf-st-inner">-->
                                        <!--								<h5 class="mkdf-st-title">-->
                                        <!--									Results you deserve </h5>-->
                                        <!--								<p class="mkdf-st-text" style="margin-top: 9px">-->
                                        <!--									Lorem ipsum dolor sit amet, consectetur adi-->
                                        <!--									piscing sed do eiusmod tempor icididu </p>-->
                                        <!--							</div>-->
                                        <!--						</div>-->
                                        <!--						<div class="mkdf-separator-holder clearfix  mkdf-separator-center " style="margin-top: 23px">-->
                                        <!--							<div class="mkdf-separator" style="border-color: #5095cc;width: 100px;border-bottom-width: 2px">-->
                                        <!--							</div>-->
                                        <!--						</div>-->
                                        <!--						<div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>-->
                                        <!--					</div>-->
                                        <!--				</div>-->
                                        <!--			</div>-->
                                        <!--		</div>-->
                                        <!--	</div>-->
                                        <!--</div>-->
                                        <!--<div class="mkdf-row-grid-section-wrapper ">-->
                                        <!--	<div class="mkdf-row-grid-section">-->
                                        <!--		<div class="vc_row wpb_row vc_row-fluid vc_custom_1520421283539">-->
                                        <!--			<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-offset-1 vc_col-md-5">-->
                                        <!--				<div class="vc_column-inner">-->
                                        <!--					<div class="wpb_wrapper">-->
                                        <!--						<div class="mkdf-counter-holder ">-->
                                        <!--							<div class="mkdf-counter-inner">-->
                                        <!--								<span class="mkdf-counter mkdf-zero-counter">117</span>-->
                                        <!--								<div class="mkdf-separator-holder clearfix  mkdf-separator-center ">-->
                                        <!--									<div class="mkdf-separator" style="width: 100px"></div>-->
                                        <!--								</div>-->
                                        <!--								<p class="mkdf-counter-text">Team Members</p>-->
                                        <!--							</div>-->
                                        <!--						</div>-->
                                        <!--						<div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span></div>-->
                                        <!--					</div>-->
                                        <!--				</div>-->
                                        <!--			</div>-->
                                        <!--			<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-offset-0 vc_col-md-5">-->
                                        <!--				<div class="vc_column-inner">-->
                                        <!--					<div class="wpb_wrapper">-->
                                        <!--						<div class="mkdf-counter-holder ">-->
                                        <!--							<div class="mkdf-counter-inner">-->
                                        <!--								<span class="mkdf-counter mkdf-zero-counter">2</span>-->
                                        <!--								<div class="mkdf-separator-holder clearfix  mkdf-separator-center ">-->
                                        <!--									<div class="mkdf-separator" style="width: 100px"></div>-->
                                        <!--								</div>-->
                                        <!--								<p class="mkdf-counter-text">Number of Offices</p>-->
                                        <!--							</div>-->
                                        <!--						</div>-->
                                        <!--						<div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span></div>-->
                                        <!--					</div>-->
                                        <!--				</div>-->
                                        <!--			</div>-->
                                        <!--			<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-offset-1 vc_col-md-5">-->
                                        <!--				<div class="vc_column-inner">-->
                                        <!--					<div class="wpb_wrapper">-->
                                        <!--						<div class="mkdf-counter-holder ">-->
                                        <!--							<div class="mkdf-counter-inner">-->
                                        <!--								<span class="mkdf-counter mkdf-zero-counter">18</span>-->
                                        <!--								<div class="mkdf-separator-holder clearfix  mkdf-separator-center ">-->
                                        <!--									<div class="mkdf-separator" style="width: 100px"></div>-->
                                        <!--								</div>-->
                                        <!--								<p class="mkdf-counter-text">Total Cases</p>-->
                                        <!--							</div>-->
                                        <!--						</div>-->
                                        <!--						<div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span></div>-->
                                        <!--					</div>-->
                                        <!--				</div>-->
                                        <!--			</div>-->
                                        <!--			<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-5">-->
                                        <!--				<div class="vc_column-inner">-->
                                        <!--					<div class="wpb_wrapper">-->
                                        <!--						<div class="mkdf-counter-holder ">-->
                                        <!--							<div class="mkdf-counter-inner">-->
                                        <!--								<span class="mkdf-counter mkdf-zero-counter">93</span>-->
                                        <!--								<div class="mkdf-separator-holder clearfix  mkdf-separator-center ">-->
                                        <!--									<div class="mkdf-separator" style="width: 100px"></div>-->
                                        <!--								</div>-->
                                        <!--								<p class="mkdf-counter-text">Total Services</p>-->
                                        <!--							</div>-->
                                        <!--						</div>-->
                                        <!--						<div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span></div>-->
                                        <!--					</div>-->
                                        <!--				</div>-->
                                        <!--			</div>-->
                                        <!--		</div>-->
                                        <!--	</div>-->
                                        <!--</div>-->
                                        <div class="mkdf-row-grid-section-wrapper mkdf-parallax-row-holder mkdf-content-aligment-center"
                                            data-parallax-bg-image=<?php echo asset('/website/assets/wp-content/uploads/2018/03/h1-parallax-1.jpg'); ?> data-parallax-bg-speed=1>
                                            <div class="mkdf-row-grid-section">
                                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1521548298854">
                                                    <div
                                                        class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-10 vc_col-md-12 vc_col-xs-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div
                                                                    class="mkdf-testimonials-holder mkdf-testimonials-standard  clearfix">
                                                                    <div class="mkdf-testimonials mkdf-owl-slider"
                                                                        data-number-of-items="1"
                                                                        data-enable-loop="yes"
                                                                        data-enable-autoplay="yes"
                                                                        data-slider-speed="5000"
                                                                        data-slider-speed-animation="600"
                                                                        data-enable-navigation="no"
                                                                        data-enable-pagination="yes">
                                                                        <div class="mkdf-testimonial-content"
                                                                            id="mkdf-testimonials-485">
                                                                            <div class="mkdf-testimonial-text-holder">
                                                                                <h3 itemprop="name"
                                                                                    class="mkdf-testimonial-title entry-title">
                                                                                    Reviews from clients</h3>
                                                                                <div
                                                                                    class="mkdf-separator-holder clearfix mkdf-separator-center">
                                                                                    <div class="mkdf-separator"></div>
                                                                                </div>
                                                                                <h6 class="mkdf-testimonial-text">“I
                                                                                    would like to say, one of hardest
                                                                                    lawyer in the UK. They actually work
                                                                                    hard to beat my case at court. You
                                                                                    can call them at any time of the
                                                                                    day. I do recommend anyone to them.
                                                                                    I will be using them
                                                                                    again..&#039;&#039;</h6>
                                                                                <span class="mkdf-testimonial-author">
                                                                                    <span
                                                                                        class="mkdf-testimonials-author-name">Parys
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mkdf-testimonial-content"
                                                                            id="mkdf-testimonials-174">
                                                                            <div class="mkdf-testimonial-text-holder">
                                                                                <h3 itemprop="name"
                                                                                    class="mkdf-testimonial-title entry-title">
                                                                                    Reviews from clients</h3>
                                                                                <div
                                                                                    class="mkdf-separator-holder clearfix mkdf-separator-center">
                                                                                    <div class="mkdf-separator"></div>
                                                                                </div>
                                                                                <h6 class="mkdf-testimonial-text">
                                                                                    &quot;They have been amazing at
                                                                                    helping us through a difficult
                                                                                    time.Always informed us on the
                                                                                    proceedings and on top of
                                                                                    everything.Best firm ever! Thank you
                                                                                    very very much! &quot;</h6>
                                                                                <span class="mkdf-testimonial-author">
                                                                                    <span
                                                                                        class="mkdf-testimonials-author-name">Diana
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <!--																	<div class="mkdf-testimonial-content" id="mkdf-testimonials-173">-->
                                                                        <!--																		<div class="mkdf-testimonial-text-holder">-->
                                                                        <!--																			<h3 itemprop="name" class="mkdf-testimonial-title entry-title">-->
                                                                        <!--																				Reviews from clients</h3>-->
                                                                        <!--																			<div class="mkdf-separator-holder clearfix mkdf-separator-center">-->
                                                                        <!--																				<div class="mkdf-separator"></div>-->
                                                                        <!--																			</div>-->
                                                                        <!--																			<h6 class="mkdf-testimonial-text">“At Lloyds solicitors I have had the more pleasant experience while I was in a nightmare investigation criminal case conducted against me.-->
                                                                        <!--While being interviewed by the SFO, lloyds solicitors have always provided me constant support, they always went that extra mile with me in every possible way , they were even calling me time to time to inquire about my news and my health condition.-->
                                                                        <!--Lloyds solicitors are very human, very close to their clients, they made me feel very protected and always kept me informed of every single step of the way while the investigation was on going. I have always felt like my solicitors were so involved in this matter as if they were in my shoes, they are absolutely amazing, supportive , they make you feel protected from the beginning to the end , I very highly recommend their services , Lloyds solicitors are absolutely amazing. Thanks to their services I was finally discharged with a no further action.-->
                                                                        <!--Lloyds solicitors played a major role in my freedom, bless them..&#039;&#039;</h6>-->
                                                                        <!--																			<span class="mkdf-testimonial-author">-->
                                                                        <!--																				<span class="mkdf-testimonials-author-name">Adel-->
                                                                        <!--																					</span>-->
                                                                        <!--																			</span>-->
                                                                        <!--																		</div>-->
                                                                        <!--																	</div>-->
                                                                        <div class="mkdf-testimonial-content"
                                                                            id="mkdf-testimonials-485">
                                                                            <div class="mkdf-testimonial-text-holder">
                                                                                <h3 itemprop="name"
                                                                                    class="mkdf-testimonial-title entry-title">
                                                                                    Reviews from clients</h3>
                                                                                <div
                                                                                    class="mkdf-separator-holder clearfix mkdf-separator-center">
                                                                                    <div class="mkdf-separator"></div>
                                                                                </div>
                                                                                <h6 class="mkdf-testimonial-text">“Best
                                                                                    solicitors about highly recommend!
                                                                                    Very pleased with the outcome Kept
                                                                                    in contact with kept me updated with
                                                                                    everything going on Highly
                                                                                    recommended.&#039;&#039;</h6>
                                                                                <span class="mkdf-testimonial-author">
                                                                                    <span
                                                                                        class="mkdf-testimonials-author-name">Alfie
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mkdf-testimonial-content"
                                                                            id="mkdf-testimonials-485">
                                                                            <div class="mkdf-testimonial-text-holder">
                                                                                <h3 itemprop="name"
                                                                                    class="mkdf-testimonial-title entry-title">
                                                                                    Reviews from clients</h3>
                                                                                <div
                                                                                    class="mkdf-separator-holder clearfix mkdf-separator-center">
                                                                                    <div class="mkdf-separator"></div>
                                                                                </div>
                                                                                <h6 class="mkdf-testimonial-text">“Very
                                                                                    professional and very helpful. They
                                                                                    have been dealing with my case and
                                                                                    helped me a lot and it was
                                                                                    successful. I want to thank all the
                                                                                    team. The best
                                                                                    solicitors.&#039;&#039;</h6>
                                                                                <span class="mkdf-testimonial-author">
                                                                                    <span
                                                                                        class="mkdf-testimonials-author-name">Barent
                                                                                        Baro
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mkdf-testimonial-content"
                                                                            id="mkdf-testimonials-485">
                                                                            <div class="mkdf-testimonial-text-holder">
                                                                                <h3 itemprop="name"
                                                                                    class="mkdf-testimonial-title entry-title">
                                                                                    Reviews from clients</h3>
                                                                                <div
                                                                                    class="mkdf-separator-holder clearfix mkdf-separator-center">
                                                                                    <div class="mkdf-separator"></div>
                                                                                </div>
                                                                                <h6 class="mkdf-testimonial-text">“I
                                                                                    was extremely happy with the
                                                                                    performance of Lloyds PR Solicitors.
                                                                                    My case was given their utmost
                                                                                    attention and I was kept 'in the
                                                                                    loop' with regard to my case at all
                                                                                    times; the barrister Lloyds PR
                                                                                    instructed was also extremely
                                                                                    efficient. I would highly recommend
                                                                                    Lloyds to anyone who requires the
                                                                                    services of a highly competent
                                                                                    firm.&#039;&#039;</h6>
                                                                                <span class="mkdf-testimonial-author">
                                                                                    <span
                                                                                        class="mkdf-testimonials-author-name">Vissen
                                                                                        Chettiar
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mkdf-testimonial-content"
                                                                            id="mkdf-testimonials-485">
                                                                            <div class="mkdf-testimonial-text-holder">
                                                                                <h3 itemprop="name"
                                                                                    class="mkdf-testimonial-title entry-title">
                                                                                    Reviews from clients</h3>
                                                                                <div
                                                                                    class="mkdf-separator-holder clearfix mkdf-separator-center">
                                                                                    <div class="mkdf-separator"></div>
                                                                                </div>
                                                                                <h6 class="mkdf-testimonial-text">“Very
                                                                                    professional advice and help. Very
                                                                                    fast responses and acceptable
                                                                                    price.&#039;&#039;</h6>
                                                                                <span class="mkdf-testimonial-author">
                                                                                    <span
                                                                                        class="mkdf-testimonials-author-name">Tzveta
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="mkdf-row-grid-section-wrapper ">
                                        <div class="mkdf-row-grid-section" style="position:unset !important;">
                                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1521709462158">
                                                <div class="wpb_column vc_column_container vc_col-sm-12"
                                                    style="margin-top:90px;">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="mkdf-section-title-holder"
                                                                style="text-align: center">
                                                                <div class="mkdf-st-inner">
                                                                    <h3 class="mkdf-st-title">
                                                                        Find out about our activities on News & Insights
                                                                    </h3>
                                                                    <div
                                                                        class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                                                                        <div class="mkdf-separator"
                                                                            style="width: 143px;border-bottom-width: 2px">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mkdf-row-grid-section-wrapper ">
                                        <div class="mkdf-row-grid-section">
                                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1520610634047">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="mkdf-blog-list-holder mkdf-bl-standard mkdf-bl-four-columns mkdf-normal-space mkdf-bl-pag-no-pagination   "
                                                                data-type=standard data-number-of-posts=-1
                                                                data-number-of-columns=4 data-space-between-items=normal
                                                                data-category=interview data-orderby=date
                                                                data-order=DESC data-image-size=full data-title-tag=h5
                                                                data-excerpt-length=10 data-post-info-section=yes
                                                                data-post-info-image=yes data-post-info-image-zoom=no
                                                                data-post-info-image-shader=no data-post-info-author=no
                                                                data-post-info-date=yes data-post-info-category=no
                                                                data-post-info-comments=no data-post-info-like=no
                                                                data-post-info-share=no
                                                                data-pagination-type=no-pagination data-max-num-pages=0
                                                                data-next-page=2>
                                                                <div class="mkdf-bl-wrapper mkdf-outer-space">
                                                                    <ul class="mkdf-blog-list"
                                                                        style="display:flex !important; flex-wrap:wrap !important;">
                                                                        @if ($posts)
                                                                            @foreach ($posts as $post_val)
                                                                                <li
                                                                                    class="mkdf-bl-item mkdf-item-space clearfix">
                                                                                    <div class="mkdf-bli-inner">
                                                                                        <div
                                                                                            class="mkdf-bli-image-holder">
                                                                                            <div
                                                                                                class="mkdf-post-image">
                                                                                                <a itemprop="url"
                                                                                                    href="{{ url('blog_detail' . '/' . $post_val['id']) }}"
                                                                                                    title="Law and order">
                                                                                                    <img width="1300"
                                                                                                        height="940"
                                                                                                        src="{{ asset('/images') . '/' . $post_val->image }}"
                                                                                                        class="attachment-full size-full wp-post-image"
                                                                                                        alt="i"
                                                                                                        loading="lazy" />
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mkdf-bli-content">
                                                                                            <!-- <div class="mkdf-bli-info">
                      <div itemprop="dateCreated" class="mkdf-post-info-date entry-date published updated">
                       <a itemprop="url" href="2018/03/index.html">
                        March 9, 2018 </a>
                       <meta itemprop="interactionCount" content="UserComments: 0" />
                      </div>
                     </div> -->
                                                                                            <h5 itemprop="name"
                                                                                                class="entry-title mkdf-post-title blog-mobile">
                                                                                                <a itemprop="url"
                                                                                                    href="{{ url('/blog_detail') . '/' . $post_val->id }}"
                                                                                                    title="Law and order">
                                                                                                    {{ $post_val->title }}
                                                                                                </a>
                                                                                            </h5>
                                                                                            <div
                                                                                                class="mkdf-bli-excerpt">
                                                                                                <!--<div class="mkdf-post-excerpt-holder">-->
                                                                                                <!--	<p itemprop="description" style="line-height: 1.4 !important;font-size: 14px;font-weight: bold;" class="mkdf-post-excerpt blog-mobile">-->
                                                                                                <!--	{{ $post_val->category['title'] }}-->
                                                                                                <!--	</p>-->
                                                                                                <!--</div>-->
                                                                                                <div
                                                                                                    class="mkdf-separator-holder clearfix">
                                                                                                    <div class="mkdf-separator"
                                                                                                        style="width: 00px">
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            @endforeach
                                                                        @endif
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <h1><a href="https://orestbida.com/demo-projects/cookieconsent/" target="_blank" class="demo-title">CookieConsent 🡥</a></h1>
    <h2>Example configuration with <a href="https://github.com/orestbida/iframemanager" target="_blank">iframemanager 🡥</a> (iframe blocking)</h2>
    <br>
    <p>Check your <a href="https://developer.chrome.com/docs/devtools/shortcuts/#open" target="_blank">browser's console 🡥</a> to see what's happening!</p>
    <button type="button" data-cc="c-settings">Cookie settings</button>
    <br>
    <br> -->
            </div>
            <?php echo view('website/layout/footer'); ?>


</body>


</html>
