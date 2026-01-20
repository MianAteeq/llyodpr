<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Expertise</title>
    <?php echo view('website/layout/header'); ?>

    <style>
        p {
            background-color: transparent !important;
        }

        ul {
            background-color: transparent !important;
        }
    </style>

    <style>
        .mkdf-has-bg-image {
            /* background-position: center center !important; */
            background-size: cover !important;
        }

        .mkdf-title-holder.mkdf-bg-parallax {
            background-attachment: scroll !important;
        }

        .vc_custom_1522406045702 {
            padding-top: 40px !important;
            padding-bottom: 0px !important;
        }
    </style>
</head>

<body
    class="page-template page-template-full-width page-template-full-width-php page page-id-783 theme-anwalt anwalt-core-1.1.2 woocommerce-no-js anwalt-ver-1.4 mkdf-grid-1300 mkdf-sticky-header-on-scroll-down-up mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-border-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-below-image mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled mkdf-search-covers-header wpb-js-composer js-comp-ver-6.4.1 vc_responsive"
    itemscope itemtype="http://schema.org/WebPage">
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
       <div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;margin-right:30px"></span>
       </div>
       <div id="text-3" class="widget widget_text mkdf-top-bar-widget">
        <div class="textwidget">
         <p>Call us now <a href="tel:+35123456789">+35 123 456 789</a></p>
        </div>
       </div>
       <div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;margin-left:30px"></span>
       </div>
       <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="https://www.facebook.com/QodeInteractive/" target="_blank">
        <span class="mkdf-social-icon-widget   ion-social-facebook   "></span> </a>
       <div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;border-color:#ffffff;margin-left:30px"></span>
       </div>
       <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="https://www.instagram.com/qodeinteractive/" target="_blank">
        <span class="mkdf-social-icon-widget   ion-social-instagram   "></span> </a>
       <div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;margin-left:30px"></span>
       </div>
       <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="https://www.linkedin.com/company/qode-themes/" target="_blank">
        <span class="mkdf-social-icon-widget   ion-social-linkedin   "></span> </a>
       <div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;margin-left:30px"></span>
       </div>
       <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="https://www.pinterest.com/qodeinteractive/" target="_blank">
        <span class="mkdf-social-icon-widget   ion-social-pinterest   "></span> </a>
      </div>
     </div>
    </div>
   </div> -->
            <?php echo view('website/layout/nav'); ?>
            <?php echo view('website/layout/nav-mobile'); ?>
            <a id='mkdf-back-to-top' href='#'>
                <span class="mkdf-icon-stack">
                    <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-chevron-up "></span> <span
                        aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-chevron-up "></span> </span>
            </a>
            <div class="mkdf-content">
                <div class="mkdf-content-inner">
                    <div class="mkdf-title-holder mkdf-centered-type mkdf-title-va-header-bottom mkdf-title-content-va-middle mkdf-preload-background mkdf-has-bg-image mkdf-bg-parallax"
                        style="height: 430px !important ;background-color: rgba(194,170,128,0.08);background-image:url({{ asset('/images') . '/' . $expertise_detail->banner }}) !important;">
                        <div class="mkdf-title-image">
                            <img itemprop="image" src="{{ URL::to($expertise_detail['banner']) }}" alt="k" />
                        </div>
                        <div class="mkdf-title-wrapper" style="height: 430px !important">
                            <div class="mkdf-title-inner">
                                <!-- <div class="mkdf-grid">
         <h2 class="mkdf-page-title entry-title" style="color:white;">{{ $expertise_detail->title }}</h2>
        </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="mkdf-row-grid-section-wrapper ">
                        <div class="mkdf-row-grid-section">
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1522406045702">
                                <div
                                    class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="mkdf-section-title-holder  " style="text-align: center">
                                                <div class="mkdf-st-inner">
                                                    <h3 class="mkdf-st-title"
                                                        style="font-size:35px !important; font-weight: bold !important;">
                                                        {{ $expertise_detail->title }}
                                                    </h3>
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

                    <div class="mkdf-row-grid-section-wrapper">
                        <div class="mkdf-row-grid-section">
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1522241979910">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="row">
                                            <section class="col-sm-12">
                                                <br>
                                                <ol class="breadcrumb">
                                                    <!-- <li class="first"><a href="/serious-complex-crime" title="{{ $expertise_detail->title }}" class="active-trail"> <strong> Expertise </strong> </a></li> -->
                                                    <li class="active last"> <strong
                                                            style="color: black; font-weight:bold;">
                                                            {{ $expertise_detail->title }} </strong></li>
                                                </ol> <a id="main-content"></a>
                                                <div class="region region-content">
                                                    <section id="block-system-main"
                                                        class="block block-system clearfix">
                                                        <div id="node-6" class="node node-page clearfix"
                                                            about="/business-crime-confiscation"
                                                            typeof="foaf:Document">
                                                            <div class="content">
                                                                <div
                                                                    class="field field-name-body field-type-text-with-summary field-label-hidden">
                                                                    <div class="field-items">
                                                                        <div class="field-item even"
                                                                            property="content:encoded">
                                                                            <!--<p style="font-size: 10.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Arial; color: #333333;">-->

                                                                            <!--	<?php echo $expertise_detail->short_description; ?>-->
                                                                            <!--</p>-->
                                                                            <p>
                                                                                <?php echo $expertise_detail->discription; ?>
                                                                            </p>

                                                                            <p style="margin-bottom:30px;"></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </section>
                                            @foreach ($expertise_detail['expertises'] as $ex)
                                                <section class="col-sm-12">
                                                    <ol class="breadcrumb">
                                                        <br>
                                                        <!-- <li class="first"><a href="/serious-complex-crime" title="{{ $expertise_detail->title }}" class="active-trail"> <strong> Expertise </strong> </a></li> -->
                                                        <li class="active last"> <strong
                                                                style="color: black; font-weight:bold;">
                                                                {{ $ex->title }} </strong></li>
                                                    </ol> <a id="main-content"></a>
                                                    <div class="region region-content">
                                                        <section id="block-system-main"
                                                            class="block block-system clearfix">
                                                            <div id="node-6" class="node node-page clearfix"
                                                                about="/business-crime-confiscation"
                                                                typeof="foaf:Document">
                                                                <div class="content">
                                                                    <div
                                                                        class="field field-name-body field-type-text-with-summary field-label-hidden">
                                                                        <div class="field-items">
                                                                            <div class="field-item even"
                                                                                property="content:encoded">
                                                                                <!--<p style="font-size: 10.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Arial; color: #333333;">-->

                                                                                <!--	<?php echo $ex->short_description; ?>-->
                                                                                <!--</p>-->
                                                                                <p>
                                                                                    <?php echo $ex->discription; ?>
                                                                                </p>

                                                                                <p style="margin-bottom:50px;"></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </section>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <p style="margin-top:100px;"></p>
            <p style="margin-bottom:50px;"></p>


            <?php echo view('website/layout/footer'); ?>
</body>

</html>
