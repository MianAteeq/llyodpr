<!DOCTYPE html>

<html lang="en-US">



<head>

    <title>Blog</title>



    <?php echo view('website/layout/header'); ?>

</head>



<body class="archive category category-business-trips category-19 theme-anwalt anwalt-core-1.1.2 woocommerce-no-js anwalt-ver-1.4 mkdf-grid-1300 mkdf-sticky-header-on-scroll-down-up mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-border-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-below-image mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled mkdf-search-covers-header wpb-js-composer js-comp-ver-6.4.1 vc_responsive" itemscope itemtype="http://schema.org/WebPage">

<?php echo view('website/layout/sidebar'); ?>

    <div class="mkdf-wrapper">

        <div class="mkdf-wrapper-inner">

            <div class="mkdf-top-bar">

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
<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{\App\Models\Setting::first()->facebook}}" target="_blank">
    <span class="mkdf-social-icon-widget   ion-social-facebook   "></span> </a>
<div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;border-color:#ffffff;margin-left:30px"></span>
</div>
<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{\App\Models\Setting::first()->twitter}}" target="_blank">
    <span class="mkdf-social-icon-widget   ion-social-instagram   "></span> </a>
<div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;margin-left:30px"></span>
</div>
<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{\App\Models\Setting::first()->linkdin}}" target="_blank">
    <span class="mkdf-social-icon-widget   ion-social-linkedin   "></span> </a>
<div class="widget mkdf-vertical-separator-widget mkdf-vertical-separator-full-height"><span class="mkdf-vsw-height-holder"></span><span class="mkdf-vsw" style="vertical-align:middle;height:100%;border-left-style:solid;margin-left:30px"></span>
</div>
<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#6c5835" style="color: #ffffff;;font-size: 18px;margin: 0px 0px 0px 30px;" href="{{\App\Models\Setting::first()->trustpilot}}" target="_blank">
    <span class="mkdf-social-icon-widget   ion-social-pinterest   "></span> </a>

</div>

                    </div>

                </div>

            </div>

            <?php echo view('website/layout/nav'); ?>

            <?php echo view('website/layout/nav-mobile'); ?>

            <a id='mkdf-back-to-top' href='#'>

                <span class="mkdf-icon-stack">

                    <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-chevron-up "></span> <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-chevron-up "></span> </span>

            </a>

            <div class="mkdf-content">

                <div class="mkdf-content-inner">

                    <div class="mkdf-title-holder mkdf-centered-type mkdf-title-va-header-bottom mkdf-title-content-va-middle" style="height: 350px;background-color: rgba(194,170,128,0.08)" data-height="350">

                        <div class="mkdf-title-wrapper" style="height: 350px">

                            <div class="mkdf-title-inner">

                                <div class="mkdf-grid">

                                    <h2 class="mkdf-page-title entry-title">Business trips</h2>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="mkdf-container">

                        <div class="mkdf-container-inner clearfix">

                            <div class="mkdf-grid-row mkdf-grid-large-gutter">

                                <div class="mkdf-page-content-holder mkdf-grid-col-12">

                                    <div class="mkdf-blog-holder mkdf-blog-standard mkdf-blog-pagination-standard mkdf-masonry-images-fixed" data-blog-type=standard data-next-page=2 data-max-num-pages=1 data-post-number=10 data-excerpt-length=100 data-archive-category=19>

                                        <div class="mkdf-blog-holder-inner">

                                            @if($post)

                                            @foreach($post as $post_val)

                                            <article id="post-1003" class="mkdf-post-has-media post-1003 post type-post status-publish format-standard has-post-thumbnail hentry category-business-trips tag-business tag-justice tag-violence">

                                                <div class="mkdf-post-content">

                                                    <div class="mkdf-post-heading">

                                                        <div class="mkdf-post-image">

                                                            <a itemprop="url" href="javascript:void(0)" title="What lawyers need">

                                                                <img width="1300" height="720" src="{{asset('/public/images' . '/' .$post_val['image']) }}" class="attachment-full size-full wp-post-image" alt="i" loading="lazy" srcset="https://anwalt.qodeinteractive.com/wp-content/uploads/2018/03/blog-img-1.jpg 1300w, https://anwalt.qodeinteractive.com/wp-content/uploads/2018/03/blog-img-1-300x166.jpg 300w, https://anwalt.qodeinteractive.com/wp-content/uploads/2018/03/blog-img-1-768x425.jpg 768w, https://anwalt.qodeinteractive.com/wp-content/uploads/2018/03/blog-img-1-1024x567.jpg 1024w, https://anwalt.qodeinteractive.com/wp-content/uploads/2018/03/blog-img-1-800x443.jpg 800w" sizes="(max-width: 1300px) 100vw, 1300px" />

                                                            </a>

                                                        </div>

                                                    </div>

                                                    <div class="mkdf-post-text">

                                                        <div class="mkdf-post-text-inner">

                                                            <div class="mkdf-post-info-top">

                                                                <div class="mkdf-post-info-author">

                                                                    <a itemprop="author" class="mkdf-post-info-author-link" href="javascript:void(0)">

                                                                        Category : {{$post_val['category']['title']}}

                                                                    </a>

                                                                </div>

                                                                <div itemprop="dateCreated" class="mkdf-post-info-date entry-date published updated">

                                                                    <a itemprop="url" href="javascript:void(0)">

                                                                        March 9, 2018

                                                                    </a>

                                                                    <meta itemprop="interactionCount" content="UserComments: 0" />

                                                                </div>

                                                                <div class="mkdf-post-info-category">

                                                                    <a href="javascript:void(0)" rel="category tag">Business trips</a>

                                                                </div>

                                                            </div>

                                                            <div class="mkdf-post-text-main">

                                                                <h3 itemprop="name" class="entry-title mkdf-post-title">

                                                                    <a itemprop="url" href="javascript:void(0)" title="What lawyers need">

                                                                        {{$post_val['title']}}

                                                                    </a>

                                                                </h3>

                                                                <div class="mkdf-post-excerpt-holder">

                                                                    <p itemprop="description" class="mkdf-post-excerpt">

                                                                        {{strip_tags($post_val['description'])}}

                                                                    </p>

                                                                </div>

                                                                <div class="mkdf-post-read-more-button">

                                                                    <a itemprop="url" href="{{url('blog_detail' . '/' . $post_val['id'])}}" target="_self" class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-icon mkdf-blog-list-button mkdf-btn-icon-animate">

                                                                        <span class="mkdf-btn-text">Read More</span>

                                                                        <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-arrow-right "></span></a>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </article>

                                            @endforeach

                                            @endif

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <?php echo view('website/layout/footer'); ?>