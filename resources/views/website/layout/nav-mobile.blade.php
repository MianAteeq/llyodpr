<style>
    .mkdf-mobile-header .mkdf-mobile-header-inner {
        height: 130px !important;
    }

        .mkdf-mobile-header .mkdf-mobile-nav .mkdf-grid>ul>li>a {
            font-size: 30px !important;
            line-height: 50px !important;
        }
</style>
<header class="mkdf-mobile-header">

    <div class="mkdf-mobile-header-inner">

        <div class="mkdf-mobile-header-holder">

            <div class="mkdf-grid">

                <div class="mkdf-vertical-align-containers">

                    <div class="mkdf-vertical-align-containers">

                        <div class="mkdf-mobile-menu-opener mkdf-mobile-menu-opener-icon-pack">

                            <a href="#">

                                <span class="mkdf-mobile-menu-icon" style="font-size: 54px !important;">

                                    <span aria-hidden="true" class="mkdf-icon-font-elegant icon_menu "></span> </span>

                            </a>

                        </div>

                        <div class="mkdf-position-center">

                            <div class="mkdf-position-center-inner">

                                <div class="mkdf-mobile-logo-wrapper">

                                    <a itemprop="url" href="{{url('/')}}" style="height: 80px;">

                                        <img itemprop="image" src="<?php echo asset('/public/website') ?>/assets/wp-content/themes/anwalt/assets/img/logo.png" alt="Mobile Logo" />

                                    </a>

                                </div>

                            </div>

                        </div>

                        <div class="mkdf-position-right">

                            <div class="mkdf-position-right-inner">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

     <nav class="mkdf-mobile-nav ps ps--theme_default ps--active-y" role="navigation" aria-label="Mobile Menu" style="" data-ps-id="60d7ec6e-bd99-597c-301d-34dd0ca6fbb2">
<div class="mkdf-grid">
<ul id="menu-mobile-menu" class="">
<li id="mobile-menu-item-3088" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children  has_sub"><a href="{{url('/')}}" class=" current  mkdf-mobile-no-link"><span>Home</span></a>

</li>
<li id="mobile-menu-item-3088" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children  has_sub"><a href="{{url('/team')}}" class=" current  mkdf-mobile-no-link"><span>Our People</span></a>

</li>

<li id="mobile-menu-item-2999" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children has_sub"><a href="#" class=" mkdf-mobile-no-link"><span>Our Services</span></a><span class="mobile_arrow"><i class="mkdf-sub-arrow fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>
<ul class="sub_menu" style="display: none;">
   @foreach(App\Models\Expertise::all() as $expert_val)
<li id="mobile-menu-item-{{3000+$loop->iteration}}" class="menu-item menu-item-type-post_type menu-item-object-page ">
<a href="{{url('/expertise/' . str_replace(" ","_",$expert_val['title']))}}" class=""><span>{{$expert_val->title}}</span></a>
</li>

@endforeach
</ul>
</li>


<li id="mobile-menu-item-3088" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children  has_sub"><a href="{{url('/career')}}" class=" current  mkdf-mobile-no-link"><span>Careers</span></a>

</li>
<li id="mobile-menu-item-3088" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children  has_sub"><a href="{{url('/blog')}}" class=" current  mkdf-mobile-no-link"><span>News & Insights</span></a>

</li>
<li id="mobile-menu-item-3088" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children  has_sub"><a href="{{url('/contact')}}" class=" current  mkdf-mobile-no-link"><span>Contact Us</span></a>

</li>
<li id="mobile-menu-item-3088" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children  has_sub"><a href="{{url('/funding')}}" class=" current  mkdf-mobile-no-link"><span>Funding</span></a>

</li>







</ul>
</li>
</ul> </div>
<div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px; height: 179px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 123px;"></div></div></nav>





    </div>

    <form action="https://anwalt.qodeinteractive.com/" class="mkdf-search-cover" method="get">

        <div class="mkdf-container">

            <div class="mkdf-container-inner clearfix">

                <div class="mkdf-form-holder-outer">

                    <div class="mkdf-form-holder">

                        <div class="mkdf-form-holder-inner">

                            <input type="text" placeholder="Search" name="s" class="mkdf_search_field" autocomplete="off" />

                            <a class="mkdf-search-close mkdf-search-close-icon-pack" href="#">

                                <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-cross "></span> </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </form>

</header>