<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Our People</title>
    <?php echo view('website/layout/header'); ?>
    <style>
        @media (min-width: 576px) {

            .container,
            .container-sm {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {

            .container,
            .container-sm,
            .container-md {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {

            .container,
            .container-sm,
            .container-md,
            .container-lg {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {

            .container,
            .container-sm,
            .container-md,
            .container-lg,
            .container-xl {
                max-width: 1140px;
            }
        }

        .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-10,
        .col-11,
        .col-12,
        .col,
        .col-auto,
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm,
        .col-sm-auto,
        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md,
        .col-md-auto,
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg,
        .col-lg-auto,
        .col-xl-1,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .row-cols-1>* {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .row-cols-2>* {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .row-cols-3>* {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .row-cols-4>* {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .row-cols-5>* {
            -ms-flex: 0 0 20%;
            flex: 0 0 20%;
            max-width: 20%;
        }

        .row-cols-6>* {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%;
        }

        .col-auto {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%;
        }

        .col-1 {
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%;
        }

        .col-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%;
        }

        .col-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .col-5 {
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%;
        }

        .col-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-7 {
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%;
        }

        .col-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .col-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-10 {
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%;
        }

        .col-11 {
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%;
        }

        .col-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .order-first {
            -ms-flex-order: -1;
            order: -1;
        }

        .order-last {
            -ms-flex-order: 13;
            order: 13;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }


        @media only screen and (max-device-width: 576px) {
            h5 {
                font-size: 40px;
            }

            p {
                font-size: 30px;
            }

            .col-sm {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%;
            }

            .row-cols-sm-1>* {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .row-cols-sm-2>* {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .row-cols-sm-3>* {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .row-cols-sm-4>* {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .row-cols-sm-5>* {
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .row-cols-sm-6>* {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-sm-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%;
            }

            .col-sm-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%;
            }

            .col-sm-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }

            .col-sm-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-sm-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-sm-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }

            .col-sm-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-sm-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .col-sm-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }

            .col-sm-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
            }

            .col-sm-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }

            .col-sm-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%;
            }

            .col-sm-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .order-sm-first {
                -ms-flex-order: -1;
                order: -1;
            }

            .order-sm-last {
                -ms-flex-order: 13;
                order: 13;
            }

            .order-sm-0 {
                -ms-flex-order: 0;
                order: 0;
            }

            .order-sm-1 {
                -ms-flex-order: 1;
                order: 1;
            }

            .order-sm-2 {
                -ms-flex-order: 2;
                order: 2;
            }

            .order-sm-3 {
                -ms-flex-order: 3;
                order: 3;
            }

            .order-sm-4 {
                -ms-flex-order: 4;
                order: 4;
            }

            .order-sm-5 {
                -ms-flex-order: 5;
                order: 5;
            }

            .order-sm-6 {
                -ms-flex-order: 6;
                order: 6;
            }

            .order-sm-7 {
                -ms-flex-order: 7;
                order: 7;
            }

            .order-sm-8 {
                -ms-flex-order: 8;
                order: 8;
            }

            .order-sm-9 {
                -ms-flex-order: 9;
                order: 9;
            }

            .order-sm-10 {
                -ms-flex-order: 10;
                order: 10;
            }

            .order-sm-11 {
                -ms-flex-order: 11;
                order: 11;
            }

            .order-sm-12 {
                -ms-flex-order: 12;
                order: 12;
            }

            .offset-sm-0 {
                margin-left: 0;
            }

            .offset-sm-1 {
                margin-left: 8.333333%;
            }

            .offset-sm-2 {
                margin-left: 16.666667%;
            }

            .offset-sm-3 {
                margin-left: 25%;
            }

            .offset-sm-4 {
                margin-left: 33.333333%;
            }

            .offset-sm-5 {
                margin-left: 41.666667%;
            }

            .offset-sm-6 {
                margin-left: 50%;
            }

            .offset-sm-7 {
                margin-left: 58.333333%;
            }

            .offset-sm-8 {
                margin-left: 66.666667%;
            }

            .offset-sm-9 {
                margin-left: 75%;
            }

            .offset-sm-10 {
                margin-left: 83.333333%;
            }

            .offset-sm-11 {
                margin-left: 91.666667%;
            }
        }

        .mkdf-has-bg-image {
            /* background-position: center !important; */
        }

        .mkdf-title-holder.mkdf-bg-parallax {
            background-attachment: scroll !important;
        }

        p {
            /* font-family: Lustria, serif!important; */

        }
    </style>

</head>

<body
    class="home page-template page-template-full-width page-template-full-width-php page page-id-461 theme-anwalt anwalt-core-1.1.2 woocommerce-no-js anwalt-ver-1.4 mkdf-smooth-page-transitions mkdf-smooth-page-transitions-preloader mkdf-grid-1300 mkdf-sticky-header-on-scroll-down-up mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-border-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-below-image mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled mkdf-search-covers-header wpb-js-composer js-comp-ver-6.4.1 vc_responsive"
    itemscope itemtype="http://schema.org/WebPage">
    <!-- <div class="mkdf-smooth-transition-loader mkdf-mimic-ajax">
  <div class="mkdf-st-loader">
   <div class="mkdf-st-loader1">
    <div class="mkdf-reveal-image"><img src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/04/preloader-img.png" alt="spinner" />
     <div class="mkdf-spinner-revealer"></div>
    </div>
   </div>
  </div>
 </div> -->
    <?php echo view('website/layout/sidebar'); ?>
    <div class="mkdf-wrapper">
        <div class="mkdf-wrapper-inner">
            <!-- <div class="mkdf-top-bar">
    <div class="mkdf-vertical-align-containers">
     <div class="mkdf-position-left">
      <div class="mkdf-position-left-inner">
       <div id="text-2" class="widget widget_text mkdf-top-bar-widget">
        <div class="textwidget">
         <p>Opening hours / Monday &#8211; Friday / 09:30 &#8211; 5:00</p>
        </div>
       </div>
      </div>
     </div>
     <div class="mkdf-position-center">
      <div class="mkdf-position-center-inner">
      </div>
     </div>
     <div class="mkdf-position-right">
      <div class="mkdf-position-right-inner">

       <div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;margin-left:30px"></span>
       </div>
       <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{ \App\Models\Setting::first()->facebook }}" target="_blank">
        <span class="mkdf-social-icon-widget   ion-social-facebook   "></span> </a>
       <div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;border-color:#ffffff;margin-left:30px"></span>
       </div>
       <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{ \App\Models\Setting::first()->twitter }}" target="_blank">
        <span class="mkdf-social-icon-widget   ion-social-instagram   "></span> </a>
       <div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;margin-left:30px"></span>
       </div>
       <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{ \App\Models\Setting::first()->linkdin }}" target="_blank">
        <span class="mkdf-social-icon-widget   ion-social-linkedin   "></span> </a>
       <div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;margin-left:30px"></span>
       </div>
       <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{ \App\Models\Setting::first()->trustpilot }}" target="_blank">
        <span class="mkdf-social-icon-widget   ion-social-pinterest   "></span> </a>

      </div>
     </div>
    </div>
   </div> -->
            <?php echo view('website/layout/nav'); ?>
            <?php echo view('website/layout/nav-mobile'); ?>
            <a id='mkdf-back-to-top' href='#'>
                <span class="mkdf-icon-stack">
                    <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-chevron-up "></span>
                    <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-chevron-up "></span>
                </span>
            </a>
            <div class="mkdf-content">
                <div class="mkdf-content-inner">
                    <div class="mkdf-full-width">
                        <div class="mkdf-full-width-inner">
                            <div class="mkdf-grid-row">
                                <div class="mkdf-page-content-holder mkdf-grid-col-12">
                                    <!-- <div class="vc_row wpb_row vc_row-fluid">
          <div class="wpb_column vc_column_container vc_col-sm-12">
           <div class="vc_column-inner">
            <div class="wpb_wrapper">
             <div class="wpb_revslider_element wpb_content_element">
              <p class="rs-p-wp-fix"></p>
              <rs-module-wrap id="rev_slider_3_2_wrapper"
               data-source="gallery"
               style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
               <rs-module id="rev_slider_3_2" style=""
                data-version="6.2.23">
                <rs-slides>
                 <rs-slide data-key="rs-3" data-title="Slide"
                  data-thumb="//anwalt.qodeinteractive.com/wp-content/uploads/2018/03/h2-slider1-background-img-100x50.jpg"
                  data-anim="ei:d;eo:d;s:d;r:0;t:fade;sl:d;"
                  data-firstanim="t:fade;s:300;sl:7;">
                  <img src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/03/h2-slider1-background-img.jpg"
                   title="Law Office" data-parallax="8"
                   data-panzoom="d:8000;ss:100;se:110;"
                   class="rev-slidebg" data-no-retina>
                  <rs-layer id="slider-3-slide-3-layer-4"
                   data-type="image" data-rsp_ch="on"
                   data-xy="x:c;y:m;yo:-158px,-148px,-141px,-172px;"
                   data-text="l:22;a:inherit;"
                   data-dim="w:['216px','216px','216px','216px'];h:['51px','51px','51px','51px'];"
                   data-vbility="t,t,t,f"
                   data-frame_0="y:50px;tp:600;"
                   data-frame_1="tp:600;e:circ.out;st:500;sp:1200;sR:500;"
                   data-frame_999="o:0;tp:600;e:nothing;st:w;sR:2300;"
                   style="z-index:5;"><img
                    src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/03/h2-slider1-img-1.png"
                    width="216" height="51" data-no-retina>
                  </rs-layer>
                  <rs-layer id="slider-3-slide-3-layer-1"
                   data-type="text" data-rsp_ch="on"
                   data-xy="x:c;y:m;yo:-67px,-64px,1px,-113px;"
                   data-text="w:nowrap,nowrap,normal,normal;s:80,70,60,45;l:110,90,70,55;a:inherit,inherit,center,center;"
                   data-dim="w:auto,auto,773px,298px;h:auto,auto,188px,auto;"
                   data-frame_0="y:50px;tp:600;"
                   data-frame_1="tp:600;e:circ.out;st:710;sp:1200;sR:710;"
                   data-frame_999="o:0;tp:600;e:nothing;st:w;sR:2090;"
                   style="z-index:6;font-family:Lustria;">We
                   Make Law Respectable
                  </rs-layer>
                  <rs-layer id="slider-3-slide-3-layer-3"
                   data-type="text" data-rsp_ch="on"
                   data-xy="x:c;y:m;yo:42px,38px,22px,10px;"
                   data-text="w:normal;s:21,21,16,16;l:30,30,26,26;fw:300;a:center;"
                   data-dim="w:683px,685px,597px,290px;h:92px,91px,auto,auto;"
                   data-frame_0="y:50px;tp:600;"
                   data-frame_1="tp:600;e:circ.out;st:900;sp:1200;sR:900;"
                   data-frame_999="o:0;tp:600;e:nothing;st:w;sR:1900;"
                   style="z-index:7;font-family:Open Sans;">In
                   order to provide our clients with the best
                   law practices, we always strive for
                   excellence based on humane approach.
                  </rs-layer>
                  <rs-layer id="slider-3-slide-3-layer-5"
                   data-type="text"
                   data-xy="x:c;xo:-97px,-100px,-100px,0;y:m;yo:127px,118px,113px,122px;"
                   data-text="l:22;a:inherit;"
                   data-rsp_bd="off"
                   data-frame_0="y:50px;tp:600;"
                   data-frame_1="tp:600;e:circ.out;st:1100;sp:1200;sR:1100;"
                   data-frame_999="o:0;tp:600;e:nothing;st:w;sR:1700;"
                   style="z-index:8;"><a itemprop="url"
                    href="#" target="_self"
                    style="color: #c2aa80;background-color: #ffffff"
                    class="mkdf-btn mkdf-btn-medium mkdf-btn-solid">
                    <span class="mkdf-btn-text">Contact
                     Us</span>
                   </a>
                  </rs-layer>
                  <rs-layer id="slider-3-slide-3-layer-6"
                   data-type="text"
                   data-xy="x:c;xo:97px,100px,100px,88px;y:m;yo:126px,118px,113px,122px;"
                   data-text="l:22;a:inherit;"
                   data-vbility="t,t,t,f" data-rsp_bd="off"
                   data-frame_0="y:50px;tp:600;"
                   data-frame_1="tp:600;e:circ.out;st:1100;sp:1200;sR:1100;"
                   data-frame_999="o:0;tp:600;e:nothing;st:w;sR:1700;"
                   style="z-index:9;"><a itemprop="url"
                    href="https://qodeinteractive.com/purchase/anwalt/"
                    target="_blank"
                    style="color: #ffffff;border-color: #ffffff"
                    class="mkdf-btn mkdf-btn-medium mkdf-btn-outline">
                    <span
                     class="mkdf-btn-text">Purchase</span>
                   </a>
                  </rs-layer>
                 </rs-slide>
                 <rs-slide data-key="rs-7" data-title="Slide"
                  data-thumb="//anwalt.qodeinteractive.com/wp-content/uploads/2018/03/h2-slider2-background-img-100x50.jpg"
                  data-anim="ei:d;eo:d;s:d;r:0;t:fade;sl:d;">
                  <img src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/03/h2-slider2-background-img.jpg"
                   title="Law Office" data-bg="p:right top;"
                   data-parallax="8"
                   data-panzoom="d:8000;ss:100;se:110;"
                   class="rev-slidebg" data-no-retina>
                  <rs-layer id="slider-3-slide-7-layer-1"
                   data-type="image" data-rsp_ch="on"
                   data-xy="x:c;y:m;yo:-158px,-148px,-141px,-172px;"
                   data-text="l:22;a:inherit;"
                   data-dim="w:['216px','216px','216px','216px'];h:['51px','51px','51px','51px'];"
                   data-vbility="t,t,t,f"
                   data-frame_0="y:50px;tp:600;"
                   data-frame_1="tp:600;e:circ.out;st:500;sp:1200;sR:500;"
                   data-frame_999="o:0;tp:600;e:nothing;st:w;sR:2300;"
                   style="z-index:5;"><img
                    src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/03/h2-slider1-img-1.png"
                    width="216" height="51" data-no-retina>
                  </rs-layer>
                  <rs-layer id="slider-3-slide-7-layer-2"
                   data-type="text" data-rsp_ch="on"
                   data-xy="x:c;y:m;yo:-67px,-64px,1px,-113px;"
                   data-text="w:nowrap,nowrap,normal,normal;s:80,70,60,45;l:110,90,70,55;a:inherit,inherit,center,center;"
                   data-dim="w:auto,auto,721px,298px;h:auto,auto,184px,auto;"
                   data-frame_0="y:50px;tp:600;"
                   data-frame_1="tp:600;e:circ.out;st:710;sp:1200;sR:710;"
                   data-frame_999="o:0;tp:600;e:nothing;st:w;sR:2090;"
                   style="z-index:6;font-family:Lustria;">
                   Equality is Our Main Goal
                  </rs-layer>
                  <rs-layer id="slider-3-slide-7-layer-3"
                   data-type="text" data-rsp_ch="on"
                   data-xy="x:c;y:m;yo:43px,38px,22px,10px;"
                   data-text="w:normal;s:21,21,16,16;l:30,30,26,26;fw:300;a:center;"
                   data-dim="w:700px,692px,597px,290px;h:91px,92px,auto,auto;"
                   data-frame_0="y:50px;tp:600;"
                   data-frame_1="tp:600;e:circ.out;st:900;sp:1200;sR:900;"
                   data-frame_999="o:0;tp:600;e:nothing;st:w;sR:1900;"
                   style="z-index:7;font-family:Open Sans;">In
                   order to provide our clients with the best
                   law practices, we always strive for
                   excellence based on humane approach.
                  </rs-layer>
                  <rs-layer id="slider-3-slide-7-layer-4"
                   data-type="text"
                   data-xy="x:c;xo:-97px,-100px,-100px,0;y:m;yo:127px,118px,113px,122px;"
                   data-text="l:22;a:inherit;"
                   data-rsp_bd="off"
                   data-frame_0="y:50px;tp:600;"
                   data-frame_1="tp:600;e:circ.out;st:1100;sp:1200;sR:1100;"
                   data-frame_999="o:0;tp:600;e:nothing;st:w;sR:1700;"
                   style="z-index:8;"><a itemprop="url"
                    href="#" target="_self"
                    style="color: #c2aa80;background-color: #ffffff"
                    class="mkdf-btn mkdf-btn-medium mkdf-btn-solid">
                    <span class="mkdf-btn-text">Contact
                     Us</span>
                   </a>
                  </rs-layer>
                  <rs-layer id="slider-3-slide-7-layer-5"
                   data-type="text"
                   data-xy="x:c;xo:97px,100px,100px,88px;y:m;yo:127px,118px,113px,122px;"
                   data-text="l:22;a:inherit;"
                   data-vbility="t,t,t,f" data-rsp_bd="off"
                   data-frame_0="y:50px;tp:600;"
                   data-frame_1="tp:600;e:circ.out;st:1100;sp:1200;sR:1100;"
                   data-frame_999="o:0;tp:600;e:nothing;st:w;sR:1700;"
                   style="z-index:9;"><a itemprop="url"
                    href="https://qodeinteractive.com/purchase/anwalt/"
                    target="_blank"
                    style="color: #ffffff;border-color: #ffffff"
                    class="mkdf-btn mkdf-btn-medium mkdf-btn-outline">
                    <span
                     class="mkdf-btn-text">Purchase</span>
                   </a>
                  </rs-layer>
                 </rs-slide>
                 <rs-slide data-key="rs-8" data-title="Slide"
                  data-thumb="//anwalt.qodeinteractive.com/wp-content/uploads/2018/03/h2-slider3-background-img-100x50.jpg"
                  data-anim="ei:d;eo:d;s:d;r:0;t:fade;sl:d;">
                  <img src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/03/h2-slider3-background-img.jpg"
                   title="Law Office" data-bg="p:left bottom;"
                   data-parallax="8"
                   data-panzoom="d:9000;ss:100;se:110;"
                   class="rev-slidebg" data-no-retina>
                  <rs-layer id="slider-3-slide-8-layer-1"
                   data-type="image" data-rsp_ch="on"
                   data-xy="x:c;y:m;yo:-158px,-148px,-141px,-172px;"
                   data-text="l:22;a:inherit;"
                   data-dim="w:['216px','216px','216px','216px'];h:['51px','51px','51px','51px'];"
                   data-vbility="t,t,t,f"
                   data-frame_0="y:50px;tp:600;"
                   data-frame_1="tp:600;e:circ.out;st:500;sp:1200;sR:500;"
                   data-frame_999="o:0;tp:600;e:nothing;st:w;sR:2300;"
                   style="z-index:5;"><img
                    src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/03/h2-slider1-img-1.png"
                    width="216" height="51" data-no-retina>
                  </rs-layer>
                  <rs-layer id="slider-3-slide-8-layer-2"
                   data-type="text" data-rsp_ch="on"
                   data-xy="x:c;y:m;yo:-67px,-64px,1px,-113px;"
                   data-text="w:nowrap,nowrap,normal,normal;s:80,70,60,45;l:110,90,70,55;a:inherit,inherit,center,center;"
                   data-dim="w:auto,auto,753px,298px;h:auto,auto,186px,auto;"
                   data-frame_0="y:50px;tp:600;"
                   data-frame_1="tp:600;e:circ.out;st:710;sp:1200;sR:710;"
                   data-frame_999="o:0;tp:600;e:nothing;st:w;sR:2090;"
                   style="z-index:6;font-family:Lustria;">
                   Innovative Law Approach
                  </rs-layer>
                  <rs-layer id="slider-3-slide-8-layer-3"
                   data-type="text" data-rsp_ch="on"
                   data-xy="x:c;y:m;yo:43px,38px,22px,10px;"
                   data-text="w:normal;s:21,21,16,16;l:30,30,26,26;fw:300;a:center;"
                   data-dim="w:685px,686px,597px,290px;h:91px,91px,auto,auto;"
                   data-frame_0="y:50px;tp:600;"
                   data-frame_1="tp:600;e:circ.out;st:900;sp:1200;sR:900;"
                   data-frame_999="o:0;tp:600;e:nothing;st:w;sR:1900;"
                   style="z-index:7;font-family:Open Sans;">In
                   order to provide our clients with the best
                   law practices, we always strive for
                   excellence based on humane approach.
                  </rs-layer>
                  <rs-layer id="slider-3-slide-8-layer-4"
                   data-type="text"
                   data-xy="x:c;xo:-97px,-100px,-100px,0;y:m;yo:127px,118px,113px,122px;"
                   data-text="l:22;a:inherit;"
                   data-rsp_bd="off"
                   data-frame_0="y:50px;tp:600;"
                   data-frame_1="tp:600;e:circ.out;st:1100;sp:1200;sR:1100;"
                   data-frame_999="o:0;tp:600;e:nothing;st:w;sR:1700;"
                   style="z-index:8;"><a itemprop="url"
                    href="#" target="_self"
                    style="color: #c2aa80;background-color: #ffffff"
                    class="mkdf-btn mkdf-btn-medium mkdf-btn-solid">
                    <span class="mkdf-btn-text">Contact
                     Us</span>
                   </a>
                  </rs-layer>
                  <rs-layer id="slider-3-slide-8-layer-5"
                   data-type="text"
                   data-xy="x:c;xo:97px,100px,100px,88px;y:m;yo:127px,118px,113px,122px;"
                   data-text="l:22;a:inherit;"
                   data-vbility="t,t,t,f" data-rsp_bd="off"
                   data-frame_0="y:50px;tp:600;"
                   data-frame_1="tp:600;e:circ.out;st:1100;sp:1200;sR:1100;"
                   data-frame_999="o:0;tp:600;e:nothing;st:w;sR:1700;"
                   style="z-index:9;"><a itemprop="url"
                    href="https://qodeinteractive.com/purchase/anwalt/"
                    target="_blank"
                    style="color: #ffffff;border-color: #ffffff"
                    class="mkdf-btn mkdf-btn-medium mkdf-btn-outline">
                    <span
                     class="mkdf-btn-text">Purchase</span>
                   </a>
                  </rs-layer>
                 </rs-slide>
                </rs-slides>
               </rs-module>
               <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
               <script type="text/javascript">
                   setREVStartSize({
                       c: 'rev_slider_3_2',
                       rl: [1920, 1720, 1025, 480],
                       el: [],
                       gw: [1300, 1100, 600, 300],
                       gh: [680, 440, 550, 450],
                       type: 'standard',
                       justify: '',
                       layout: 'fullwidth',
                       mh: "0"
                   });
                   var revapi3,
                       tpj;

                   function revinit_revslider32() {
                       jQuery(function() {
                           tpj = jQuery;
                           revapi3 = tpj("#rev_slider_3_2");
                           if (revapi3 == undefined || revapi3.revolution == undefined) {
                               revslider_showDoubleJqueryError("rev_slider_3_2");
                           } else {
                               revapi3.revolution({
                                   sliderLayout: "fullwidth",
                                   duration: 4000,
                                   visibilityLevels: "1920,1720,1025,480",
                                   gridwidth: "1300,1100,600,300",
                                   gridheight: "680,440,550,450",
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
                                           style: "anwalt-navigation-light",
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
                                           style: "anwalt-navigation-light",
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
                   var once_revslider32 = false;
                   if (document.readyState === "loading") {
                       document.addEventListener('readystatechange', function() {
                           if ((document.readyState === "interactive" || document.readyState === "complete") && !
                               once_revslider32) {
                               once_revslider32 = true;
                               revinit_revslider32();
                           }
                       });
                   } else {
                       once_revslider32 = true;
                       revinit_revslider32();
                   }
               </script>
               <script>
                   var htmlDivCss = unescape(
                       "%23rev_slider_3_2_wrapper%20.anwalt-navigation-light.tparrows%20%7B%0A%20%20width%3A%2040px%3B%0A%20%20height%3A%2040px%3B%0A%20%20line-height%3A%2040px%3B%0A%20%20background%3A%20transparent%3B%0A%20%7D%0A%20%23rev_slider_3_2_wrapper%20.anwalt-navigation-light.tparrows%3Abefore%20%7B%0A%20color%3A%20%23fff%3B%0A%20font-size%3A36px%3B%0A%20font-family%3A%20%22linearicons-free%22%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%23rev_slider_3_2_wrapper%20.anwalt-navigation-light.tparrows%3Ahover%3Abefore%20%7B%0A%20%20color%3A%20%23c2aa80%3B%0A%7D%0A%20%20%0A%23rev_slider_3_2_wrapper%20.anwalt-navigation-light.tparrows.tp-leftarrow%3Abefore%7B%0A%20%20content%3A%20%22%5Ce875%22%3B%0A%7D%0A%0A%23rev_slider_3_2_wrapper%20.anwalt-navigation-light.tparrows.tp-rightarrow%3Abefore%7B%0A%20%20content%3A%20%22%5Ce876%22%3B%0A%7D%0A%23rev_slider_3_2_wrapper%20.anwalt-navigation-light%20.tp-bullet%7B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20width%3A%2010px%3B%0A%20%20height%3A%2010px%3B%0A%20%20margin%3A%200%204px%3B%0A%20%20border-radius%3A%203em%3B%0A%20%20background-color%3A%20transparent%3B%0A%20%20border%3A%202px%20solid%20%23fff%3B%0A%20%20box-sizing%3A%20border-box%3B%0A%20%20-webkit-transition%3A%20background-color%20.2s%20ease-out%2Cborder%20.2s%20ease-out%3B%0A%20%20-moz-transition%3A%20background-color%20.2s%20ease-out%2Cborder%20.2s%20ease-out%3B%0A%20%20transition%3A%20background-color%20.2s%20ease-out%2Cborder%20.2s%20ease-out%3B%0A%7D%0A%23rev_slider_3_2_wrapper%20.anwalt-navigation-light%20.tp-bullet.selected%2C%0A%23rev_slider_3_2_wrapper%20.anwalt-navigation-light%20.tp-bullet%3Ahover%20%7B%0A%20%20background-color%3A%20%23fff%3B%0A%7D%0A"
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
         </div> -->

                                    <!-- <div class="mkdf-title-holder mkdf-centered-type mkdf-title-va-header-bottom mkdf-title-content-va-middle mkdf-preload-background mkdf-has-bg-image mkdf-bg-parallax" style="height: 430px;background-color:white;background-image:url(public/website/assets/wp-content/uploads/2018/03/Team-page.jpg); background-size:contain;" data-height="430">
          <div class="mkdf-title-image">
           <img itemprop="image" src="<?php echo asset('/website/assets/wp-content/uploads/2018/03/Team-page.jpg'); ?>" alt="k" />
          </div>
          <div class="mkdf-title-wrapper" style="height: 430px">
           <div class="mkdf-title-inner">
            <div class="mkdf-grid">
             <h2 class="mkdf-page-title entry-title" style="color:white;"></h2>
            </div>
           </div>
          </div>
         </div> -->

                                    <div class="mkdf-row-grid-section-wrapper ">
                                        <div class="mkdf-row-grid-section">
                                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1522406045702">
                                                <div
                                                    class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-12">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="mkdf-section-title-holder  "
                                                                style="text-align: center">
                                                                <div class="mkdf-st-inner">
                                                                    <h3 class="mkdf-st-title">
                                                                        Our People </h3>
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
                                    <div class="mkdf-row-grid-section-wrapper ">
                                        <div class="mkdf-row-grid-section" id="append_row">
                                            <div class="row">



                                                @foreach ($team as $team_val)
                                                    <div
                                                        class="wpb_column vc_column_container col-sm-12 col-lg-3 col-md-6  ">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div
                                                                    class="mkdf-team-holder mkdf-team-info-below-image">
                                                                    <div class="mkdf-team-inner">
                                                                        <div class="mkdf-team-image">
                                                                            <!--<form action="{{ url('team_detail', $team_val->id) }}" method="post" id="{{ $team_val->id }}">-->
                                                                            <!--@csrf-->
                                                                            <!--<input type="hidden" name="id" value="{{ $team_val->id }}">-->
                                                                            <!--<a href="javascript:void(0)" class="employeeLink"><img form_id="{{ $team_val->id }}" width="800" height="578" src="{{ asset('/images' . '/' . $team_val->image) }}" class="attachment-full size-full" alt="i" loading="lazy" /></a>-->
                                                                            <a href="{{ url('team_detail', str_replace(' ', '_', $team_val->title)) }}"
                                                                                class="employeeLink"><img
                                                                                    width="800" height="578"
                                                                                    src="{{ asset('/images' . '/' . $team_val->image) }}"
                                                                                    class="attachment-full size-full"
                                                                                    alt="{{ $team_val->title }}"
                                                                                    loading="lazy" /></a>
                                                                            <!--</form>-->
                                                                        </div>
                                                                        <div class="mkdf-team-info">
                                                                            <h5 class="mkdf-team-name">
                                                                                {{ strtoupper($team_val->title) }}</h5>
                                                                            <p class="mkdf-team-text">
                                                                                {{ $team_val->designation }}</p>
                                                                            <div
                                                                                class="mkdf-separator-holder clearfix  mkdf-separator-center ">
                                                                                <div class="mkdf-separator"
                                                                                    style="width: 100px"></div>
                                                                            </div>
                                                                            <div class="mkdf-team-social-holder">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vc_empty_space"><span
                                                                        class="vc_empty_space_inner"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach




                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="mkdf-grid-row" style=" display: flex;
  align-items: center;
  justify-content: center;margin-bottom:80px;margin-top:10px;">
                                       <input type="submit" class="wpcf7-form-control has-spinner wpcf7-submit" id="LoadMore" value="Load More">
                                        </div>
         <!-- <div class="vc_row wpb_row vc_row-fluid call-us vc_custom_1522660415400 mkdf-content-aligment-center" style="background-color:#5095cc">
          <div class="wpb_column vc_column_container vc_col-sm-12">
           <div class="vc_column-inner">
            <div class="wpb_wrapper">
             <div class="wpb_text_column wpb_content_element ">
              <div class="wpb_wrapper">
               <h4>
                <span style="color: #ffffff;">
                 Need a lawyer? We have the best
                </span>
                <a href="tel:+07956845769">
                07956845769
                </a>
               </h4>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div> -->
                                    <!--<div class="mkdf-row-grid-section-wrapper ">-->
                                    <!--	<div class="mkdf-row-grid-section">-->
                                    <!--		<div class="vc_row wpb_row vc_row-fluid vc_custom_1520439640140">-->
                                    <!--			<div class="wpb_column vc_column_container vc_col-sm-12">-->
                                    <!--				<div class="vc_column-inner">-->
                                    <!--					<div class="wpb_wrapper">-->
                                    <!--						<div class="mkdf-elements-holder   mkdf-two-columns  mkdf-responsive-mode-1024 ">-->
                                    <!--							<div class="mkdf-eh-item  mkdf-vertical-alignment-top" data-item-class="mkdf-eh-custom-4196" data-680="0px">-->
                                    <!--								<div class="mkdf-eh-item-inner">-->
                                    <!--									<div class="mkdf-eh-item-content mkdf-eh-custom-4196">-->
                                    <!--										<div class="mkdf-single-image-holder">-->
                                    <!--											<div class="mkdf-si-inner">-->
                                    <!--												<img width="1024" height="654" src="<?php echo asset('/website/assets/wp-content/uploads/2018/03/h2-img-1.jpg'); ?>" class="attachment-full size-full" alt="t" loading="lazy" srcset="https://anwalt.qodeinteractive.com/wp-content/uploads/2018/03/h2-img-1.jpg 1024w, https://anwalt.qodeinteractive.com/wp-content/uploads/2018/03/h2-img-1-300x192.jpg 300w, https://anwalt.qodeinteractive.com/wp-content/uploads/2018/03/h2-img-1-768x491.jpg 768w, https://anwalt.qodeinteractive.com/wp-content/uploads/2018/03/h2-img-1-800x511.jpg 800w" sizes="(max-width: 1024px) 100vw, 1024px" />-->
                                    <!--											</div>-->
                                    <!--										</div>-->
                                    <!--									</div>-->
                                    <!--								</div>-->
                                    <!--							</div>-->
                                    <!--							<div class="mkdf-eh-item  mkdf-vertical-alignment-top" data-item-class="mkdf-eh-custom-7072" data-768-1024="70px 0px 0px" data-680-768="70px 0px 0px" data-680="70px 0px 0px">-->
                                    <!--								<div class="mkdf-eh-item-inner">-->
                                    <!--									<div class="mkdf-eh-item-content mkdf-eh-custom-7072" style="padding: 0px 0px 0px 30px">-->
                                    <!--										<div class="mkdf-accordion-holder mkdf-ac-default  mkdf-accordion mkdf-ac-boxed mkdf-white-skin clearfix">-->
                                    <!--											<p class="mkdf-accordion-title">-->
                                    <!--												<span class="mkdf-accordion-mark">-->
                                    <!--													<span class="mkdf_icon_plus icon_plus"></span>-->
                                    <!--													<span class="mkdf_icon_minus icon_minus-06"></span>-->
                                    <!--												</span>-->
                                    <!--												<span class="mkdf-tab-title">Our law office</span>-->
                                    <!--											</p>-->
                                    <!--											<div class="mkdf-accordion-content">-->
                                    <!--												<div class="mkdf-accordion-content-inner">-->
                                    <!--													<div class="wpb_text_column wpb_content_element ">-->
                                    <!--														<div class="wpb_wrapper">-->
                                    <!--															<p>Aliquam lorem ante,-->
                                    <!--																dapibus in, viverra-->
                                    <!--																quis, feugiat a,-->
                                    <!--																tellus. Phasellus-->
                                    <!--																viverra nulla ut-->
                                    <!--																metus varius-->
                                    <!--																laoreet. Quisque-->
                                    <!--																rutrum. Aenean-->
                                    <!--																imperdiet. Etiam-->
                                    <!--																ultricies nisi vel-->
                                    <!--																augue. Curabitur-->
                                    <!--																ullamcorper-->
                                    <!--																ultricies nisi nam.-->
                                    <!--															</p>-->
                                    <!--														</div>-->
                                    <!--													</div>-->
                                    <!--												</div>-->
                                    <!--											</div>-->
                                    <!--											<p class="mkdf-accordion-title">-->
                                    <!--												<span class="mkdf-accordion-mark">-->
                                    <!--													<span class="mkdf_icon_plus icon_plus"></span>-->
                                    <!--													<span class="mkdf_icon_minus icon_minus-06"></span>-->
                                    <!--												</span>-->
                                    <!--												<span class="mkdf-tab-title">Team of law experts</span>-->
                                    <!--											</p>-->
                                    <!--											<div class="mkdf-accordion-content">-->
                                    <!--												<div class="mkdf-accordion-content-inner">-->
                                    <!--													<div class="wpb_text_column wpb_content_element ">-->
                                    <!--														<div class="wpb_wrapper">-->
                                    <!--															<p>Lorem ipsum dolor sit-->
                                    <!--																amet, consectetuer-->
                                    <!--																adipiscing elit.-->
                                    <!--																Aenean com modo-->
                                    <!--																ligula eget dolor.-->
                                    <!--																Aenean massa. Cum-->
                                    <!--																sociis Theme natoque-->
                                    <!--																pena tibus et magnis-->
                                    <!--																dis parturient-->
                                    <!--																montes, nascetur-->
                                    <!--																ridiculus mus nam-->
                                    <!--																eget.</p>-->
                                    <!--														</div>-->
                                    <!--													</div>-->
                                    <!--												</div>-->
                                    <!--											</div>-->
                                    <!--											<p class="mkdf-accordion-title">-->
                                    <!--												<span class="mkdf-accordion-mark">-->
                                    <!--													<span class="mkdf_icon_plus icon_plus"></span>-->
                                    <!--													<span class="mkdf_icon_minus icon_minus-06"></span>-->
                                    <!--												</span>-->
                                    <!--												<span class="mkdf-tab-title">-->
                                    <!--													Legal and law advices-->
                                    <!--												</span>-->
                                    <!--											</p>-->
                                    <!--											<div class="mkdf-accordion-content">-->
                                    <!--												<div class="mkdf-accordion-content-inner">-->
                                    <!--													<div class="wpb_text_column wpb_content_element ">-->
                                    <!--														<div class="wpb_wrapper">-->
                                    <!--															<p>Donec vitae sapien ut-->
                                    <!--																libero venenatis-->
                                    <!--																faucibus. Nullam-->
                                    <!--																quis ante. Etiam sit-->
                                    <!--																amet orci eget eros-->
                                    <!--																faucibus tincidunt.-->
                                    <!--																Duis leo. Sed-->
                                    <!--																fringilla maurissit-->
                                    <!--																amet nib. Donec-->
                                    <!--																sodales sagittis-->
                                    <!--																magna. Donec quam-->
                                    <!--																felis, ultricies-->
                                    <!--																nec.</p>-->
                                    <!--														</div>-->
                                    <!--													</div>-->
                                    <!--												</div>-->
                                    <!--											</div>-->
                                    <!--										</div>-->
                                    <!--									</div>-->
                                    <!--								</div>-->
                                    <!--							</div>-->
                                    <!--						</div>-->
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
                                                                    data-number-of-items="1" data-enable-loop="yes"
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
                                                                            <h6 class="mkdf-testimonial-text">“I would
                                                                                like to say, one of hardest lawyer in
                                                                                the UK. They actually work hard to beat
                                                                                my case at court. You can call them at
                                                                                any time of the day. I do recommend
                                                                                anyone to them. I will be using them
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
                                                                                &quot;They have been amazing at helping
                                                                                us through a difficult time.Always
                                                                                informed us on the proceedings and on
                                                                                top of everything.Best firm ever! Thank
                                                                                you very very much! &quot;</h6>
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
                                                                                solicitors about highly recommend! Very
                                                                                pleased with the outcome Kept in contact
                                                                                with kept me updated with everything
                                                                                going on Highly recommended.&#039;&#039;
                                                                            </h6>
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
                                                                                professional and very helpful. They have
                                                                                been dealing with my case and helped me
                                                                                a lot and it was successful. I want to
                                                                                thank all the team. The best
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
                                                                            <h6 class="mkdf-testimonial-text">“I was
                                                                                extremely happy with the performance of
                                                                                Lloyds PR Solicitors. My case was given
                                                                                their utmost attention and I was kept
                                                                                'in the loop' with regard to my case at
                                                                                all times; the barrister Lloyds PR
                                                                                instructed was also extremely efficient.
                                                                                I would highly recommend Lloyds to
                                                                                anyone who requires the services of a
                                                                                highly competent firm.&#039;&#039;</h6>
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
                                                                                professional advice and help. Very fast
                                                                                responses and acceptable
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
                                <!-- <div class="mkdf-row-grid-section-wrapper ">
          <div class="mkdf-row-grid-section">
           <div class="vc_row wpb_row vc_row-fluid vc_custom_1522054578524">
            <div class="wpb_column vc_column_container vc_col-sm-12">
             <div class="vc_column-inner">
              <div class="wpb_wrapper">
               <div class="mkdf-elements-holder   mkdf-two-columns  mkdf-responsive-mode-1024 ">
                <div class="mkdf-eh-item  mkdf-vertical-alignment-top   " data-item-class="mkdf-eh-custom-2651" data-680="0px">
                 <div class="mkdf-eh-item-inner">
                  <div class="mkdf-eh-item-content mkdf-eh-custom-2651">
                   <div class="mkdf-progress-bar ">
                    <p class="mkdf-pb-title-holder">
                     <span class="mkdf-pb-title">Efficiency</span>
                     <span class="mkdf-pb-percent">0</span>
                    </p>
                    <div class="mkdf-pb-content-holder">
                     <div data-percentage=93 class="mkdf-pb-content" style="background-color: #5095cc">
                     </div>
                    </div>
                   </div>
                   <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span>
                   </div>
                   <div class="mkdf-progress-bar ">
                    <p class="mkdf-pb-title-holder">
                     <span class="mkdf-pb-title">Marketing</span>
                     <span class="mkdf-pb-percent">0</span>
                    </p>
                    <div class="mkdf-pb-content-holder">
                     <div data-percentage=56 class="mkdf-pb-content" style="background-color: #5095cc">
                     </div>
                    </div>
                   </div>
                   <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span>
                   </div>
                   <div class="mkdf-progress-bar ">
                    <p class="mkdf-pb-title-holder">
                     <span class="mkdf-pb-title">Teamwork</span>
                     <span class="mkdf-pb-percent">0</span>
                    </p>
                    <div class="mkdf-pb-content-holder">
                     <div data-percentage=77 class="mkdf-pb-content" style="background-color: #5095cc">
                     </div>
                    </div>
                   </div>
                   <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span>
                   </div>
                   <div class="mkdf-progress-bar ">
                    <p class="mkdf-pb-title-holder">
                     <span class="mkdf-pb-title">Strategy</span>
                     <span class="mkdf-pb-percent">0</span>
                    </p>
                    <div class="mkdf-pb-content-holder">
                     <div data-percentage=85 class="mkdf-pb-content" style="background-color: #5095cc">
                     </div>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
                <div class="mkdf-eh-item  mkdf-vertical-alignment-top   " data-item-class="mkdf-eh-custom-2137" data-1024-1366="5px 7% 0px 9%" data-768-1024="53px 0% 0%" data-680-768="53px 0% 0%" data-680="53px 0% 0%">
                 <div class="mkdf-eh-item-inner">
                  <div class="mkdf-eh-item-content mkdf-eh-custom-2137" style="padding: 5px 10% 0px">
                   <div class="mkdf-section-title-holder  " style="text-align: left">
                    <div class="mkdf-st-inner">
                     <h4 class="mkdf-st-title">
                      Leaders in law field </h4>
                     <p class="mkdf-st-text" style="margin-top: 17px">
                      Trusted by generations of
                      clients, our law office has a
                      distinguished record
                      representing clients. The
                      primary focus of our work is
                      delivering innovative legal
                      solutions while supporting our
                      clients and their needs. Have
                      question? Contact us! </p>
                    </div>
                   </div>
                   <div class="vc_empty_space" style="height: 33px"><span class="vc_empty_space_inner"></span>
                   </div><a itemprop="url" href="../contact-us/index.html" target="_self" class="mkdf-btn mkdf-btn-medium mkdf-btn-solid">
                    <span class="mkdf-btn-text">Contact</span>
                   </a>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div> -->
                                <!-- <div class="mkdf-row-grid-section-wrapper mkdf-parallax-row-holder" data-parallax-bg-image=https://anwalt.qodeinteractive.com/wp-content/uploads/2018/03/h2-parallax-2.jpg data-parallax-bg-speed=1>
          <div class="mkdf-row-grid-section">
           <div class="vc_row wpb_row vc_row-fluid vc_custom_1521794898982">
            <div class="wpb_column vc_column_container vc_col-sm-12">
             <div class="vc_column-inner">
              <div class="wpb_wrapper">
               <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1522406066744">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-1 vc_col-md-10">
                 <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                   <div class="mkdf-section-title-holder  " style="text-align: center">
                    <div class="mkdf-st-inner">
                     <h3 class="mkdf-st-title" style="color: #ffffff">
                      List of our satisfied clients
                     </h3>
                     <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                      <div class="mkdf-separator" style="width: 143px;border-bottom-width: 2px">
                      </div>
                     </div>
                     <h6 class="mkdf-st-text" style="color: #ffffff">
                      Impressive number of successful
                      law cases in our portfolio is a
                      confirmation of our quality.
                      Check out the list of our
                      clients and become one of them.
                     </h6>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
               <div class="mkdf-clients-carousel-holder mkdf-cc-hover-roll-over">
                <div class="mkdf-cc-inner mkdf-owl-slider" data-number-of-items="5" data-enable-loop="yes" data-enable-autoplay="yes" data-slider-speed="5000" data-slider-speed-animation="600" data-enable-navigation="no" data-enable-pagination="no" data-number-of-rows="1">
                 <div class="mkdf-cc-item">
                  <a itemprop="url" class="mkdf-cc-link mkdf-block-drag-link" href="#" target="_self">
                   <img itemprop="image" class="mkdf-cc-image" src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/04/h2-client-img-1.png" alt="i" />
                   <img itemprop="image" class="mkdf-cc-hover-image" src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/04/h2-client-img-1.png" alt="i" />
                  </a>
                 </div>
                 <div class="mkdf-cc-item">
                  <a itemprop="url" class="mkdf-cc-link mkdf-block-drag-link" href="#" target="_self">
                   <img itemprop="image" class="mkdf-cc-image" src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/04/h2-client-img-2.png" alt="i" />
                   <img itemprop="image" class="mkdf-cc-hover-image" src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/04/h2-client-img-2.png" alt="i" />
                  </a>
                 </div>
                 <div class="mkdf-cc-item">
                  <a itemprop="url" class="mkdf-cc-link mkdf-block-drag-link" href="#" target="_self">
                   <img itemprop="image" class="mkdf-cc-image" src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/04/h2-client-img-3.png" alt="i" />
                   <img itemprop="image" class="mkdf-cc-hover-image" src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/04/h2-client-img-3.png" alt="i" />
                  </a>
                 </div>
                 <div class="mkdf-cc-item">
                  <a itemprop="url" class="mkdf-cc-link mkdf-block-drag-link" href="#" target="_self">
                   <img itemprop="image" class="mkdf-cc-image" src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/04/h2-client-img-4.png" alt="i" />
                   <img itemprop="image" class="mkdf-cc-hover-image" src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/04/h2-client-img-4.png" alt="i" />
                  </a>
                 </div>
                 <div class="mkdf-cc-item">
                  <a itemprop="url" class="mkdf-cc-link mkdf-block-drag-link" href="#" target="_self">
                   <img itemprop="image" class="mkdf-cc-image" src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/04/h2-client-img-5.png" alt="i" />
                   <img itemprop="image" class="mkdf-cc-hover-image" src="<?php echo asset('/website'); ?>/assets/wp-content/uploads/2018/04/h2-client-img-5.png" alt="i" />
                  </a>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo view('website/layout/footer'); ?>
        <script>
            const divs = document.querySelectorAll('.employeeLink');

            divs.forEach(el => el.addEventListener('click', event => {
                document.getElementById(event.target.getAttribute("form_id")).submit();
            }));
            // window.addEventListener("load", function() {
            // $('.employeeLink').click(function(){
            // 	document.getElementById("myForm").submit();
            // });
            // document.getElementsByClassName("employeeLink").addEventListener("click", function(e) {
            // 	e.preventDefault(); // cancel the link
            // 	document.getElementById("myForm").submit(); // but make sure nothing has name or ID="submit"
            // });
            // });

            let qty = 2;



            jQuery("#LoadMore").click(function() {

                jQuery.ajax({
                    url: `/loadMore/${qty}`,
                    type: 'GET',

                }).done(function(result) {
                    console.log(result);
                    jQuery('#append_row').html(result.view);
                    qty = qty + 1;
                });
            });
        </script>
</body>

</html>
