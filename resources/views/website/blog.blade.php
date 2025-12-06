<!DOCTYPE html>
<html lang="en-US">

<head>
	<title>Blog</title>

	<?php echo view('website/layout/header'); ?>
	<style>
		@media only screen and (min-device-width: 300px) and (max-device-width: 768px) {
			.blog_mobile {
				min-width: 100% !important;
			}

			.mkdf-post-title a {

				font-size: 30px !important;
			}
		}
	</style>
</head>

<body class="page-template page-template-blog-standard page page-id-1123 page-child parent-pageid-2828 theme-anwalt anwalt-core-1.1.2 woocommerce-no-js anwalt-ver-1.4 mkdf-grid-1300 mkdf-sticky-header-on-scroll-down-up mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-border-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-below-image mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled mkdf-search-covers-header wpb-js-composer js-comp-ver-6.4.1 vc_responsive" itemscope itemtype="http://schema.org/WebPage">
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
			</div> -->
			<?php echo view('website/layout/nav'); ?>
			<?php echo view('website/layout/nav-mobile'); ?>
			<a id='mkdf-back-to-top' href='#'>
				<span class="mkdf-icon-stack">
					<span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-chevron-up "></span> <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-chevron-up "></span> </span>
			</a>
			<div class="mkdf-content">
				<div class="mkdf-content-inner">
				 <div class="mkdf-title-holder mkdf-standard-type mkdf-title-va-header-bottom mkdf-title-content-va-middle mkdf-preload-background mkdf-has-bg-image mkdf-bg-parallax" style="height: 350px;background-color: rgba(194,170,128,0.08);background-image:url(public/website/assets/wp-content/uploads/2018/03/blog-title-img.jpg);" data-height="350">
						<div class="mkdf-title-image">
							<img itemprop="image" src="<?php echo url('public/website/assets/wp-content/uploads/2018/03/blog-title-img.jpg') ?>" alt="i" />
						</div>
						<div class="mkdf-title-wrapper" style="height: 350px">
							<div class="mkdf-title-inner">
								<div class="mkdf-grid">
									<!--<h2 class="mkdf-page-title entry-title">Blog</h2>-->
								</div>
							</div>
						</div>
					</div> 
					<div class="mkdf-container">
						<div class="mkdf-container-inner clearfix" style="padding-top:0px !important;">
							<div class="mkdf-grid-row mkdf-grid-large-gutter">


								<div class="mkdf-related-posts-holder clearfix">
									<div class="mkdf-related-posts-holder-inner">
										<!-- <div class="mkdf-related-posts-title">
											<h4 style="text-align: center;">News & Insights</h4>
										</div> -->

										<div class="mkdf-row-grid-section-wrapper ">
											<div class="mkdf-row-grid-section">
												<div class="vc_row wpb_row vc_row-fluid vc_custom_1522406045702">
													<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-12">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class="mkdf-section-title-holder  " style="text-align: center">
																	<div class="mkdf-st-inner">
																		<h3 class="mkdf-st-title">
																			News & Insights </h3>
																		<div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
																			<div class="mkdf-separator" style="width: 143px;border-bottom-width: 2px">
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
										@foreach($posts->chunk(3) as $postss)
										<div class="mkdf-related-posts-inner clearfix">
										    @foreach($postss as $post)
											<div class="mkdf-related-post blog_mobile">
												<div class="mkdf-related-post-inner">
													<div class="mkdf-related-post-image">
														<a itemprop="url" href="{{url('/blog_detail').'/'.$post->id}}" title="The lawyers club">
															<img width="1300" height="720" src="{{asset('/public/images') .'/'. $post->image}}"
															class="attachment-full size-full wp-post-image" alt="i" loading="lazy"
															srcset="{{asset('/public/images') .'/'. $post->image}} 1300w, {{asset('/public/images') .'/'. $post->image}} 300w, {{asset('/public/images') .'/'. $post->image}} 768w, {{asset('/public/images') .'/'. $post->image}} 1024w, {{asset('/public/images') .'/'. $post->image}} 800w" sizes="(max-width: 1300px) 100vw, 1300px"> </a>
													</div>
													<h5 itemprop="name" class="entry-title mkdf-post-title"><a itemprop="url" href="{{url('/blog_detail').'/'.$post->id}}" title="The lawyers club" style="font-size: 22px;font-weight: bold;">{{$post['title']}}</a></h5>
													<div class="mkdf-post-info">
													
													</div>
												</div>
											</div>
											@endforeach
											




										</div>
											@endforeach
									</div>
								</div>
						


							</div>
						</div>
					</div>
				</div>
			</div>
			<?php echo view('website/layout/footer'); ?>
</body>

</html>