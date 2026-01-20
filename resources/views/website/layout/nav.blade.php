<style>
  .mkdf-drop-down .narrow .second .inner ul li {
    width: 180px;
    padding: 4px;
  }

  .insideli {
    font-size: 12px !important;
    /* padding-left: 13px !important; */
    color: white !important;
    text-align: left !important;
  }

  .insideli a {
    font-size: 14px !important;
    padding-left: 13px !important;
    color: white !important;
    /* text-align: center; */

  }

  .mkdf-drop-down .second .inner ul li a {
    padding: 0px !important;

  }

  #nav-menu-item-1420 a {

    /* font-weight: bold; */
  }

  .mkdf-drop-down .second.right {
    right: auto !important;
    left: auto;
  }

  .mkdf-drop-down .second {
    right: auto !important;
    left: -250px !important;
  }

  .mkdf-drop-down .second .inner ul.right li a {
    text-align: left;
  }

  .mkdf-drop-down .second .inner ul.right li a .item_outer {
    padding: 0 0 0 10px;
  }

  .mkdf-drop-down .narrow .second .inner ul.right li ul {
    left: unset;
  }

  .mkdf-drop-down .second .inner ul.right li ul {
    left: unset;
  }

  .mkdf-drop-down .narrow .second .inner ul li ul{
    top: unset;
    left: unset;
  }
  .fa-arrow-right:before {
    content: '\f054';
}
</style>
<header class="mkdf-page-header">

  <div class="mkdf-menu-area mkdf-menu-left" style="border-bottom: 1px solid #5095cc !important;">

    <div class="mkdf-vertical-align-containers">

      <div class="mkdf-position-left">

        <div class="mkdf-position-left-inner">

          <div class="mkdf-logo-wrapper">

            <a itemprop="url" href="{{url('/')}}" style="height: 50px;">

              <img itemprop="image" class="mkdf-normal-logo" src="<?php echo asset('images' . '/' . \App\Models\Setting::first()->image) ?>" alt="logo" />

              <img itemprop="image" class="mkdf-dark-logo" src="<?php echo asset('images' . '/' . \App\Models\Setting::first()->image) ?>" alt="dark logo" />

              <img itemprop="image" class="mkdf-light-logo" src="<?php echo asset('images' . '/' . \App\Models\Setting::first()->image) ?>" alt="light logo" />

            </a>

          </div>

          <nav class="mkdf-main-menu mkdf-drop-down mkdf-default-nav">

            <ul id="menu-main-menu-navigation" class="clearfix">

              <li id="nav-menu-item-58" class="{{ (request()->route()->uri == '/') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children has_sub wide mkdf-wide-menu-centered">

                <a href="{{url('/')}}" class=" current "><span class="item_outer"><span class="item_text">Home</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                <div class="second">

                  <div class="inner">



                  </div>

                </div>

              </li>

              <li id="nav-menu-item-59" class="{{ (request()->route()->uri == 'team') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">

                <a href="{{url('/team')}}" class=""><span class="item_outer"><span class="item_text">Our

                      People</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                <div class="second">

                  <div class="inner">



                  </div>

                </div>

              </li>







              <!-- <li id="nav-menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">

                              <a href="{{url('/expertise')}}" class=""><span class="item_outer"><span class="item_text">Expertise</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                              <div class="second">

                                  <div class="inner">



                                  </div>

                              </div>

                          </li> -->



              <li id="nav-menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">

                <a href="#" tabindex="-1" class=""><span class="item_outer"><span class="item_text">Our Services
                    </span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                <div class="second">

                  <div class="inner">

                    <ul style="background: #5095cc !important; color:white; display:flex; flex-direction:row; padding:30px; justify-content:space-between;width: 75vw; ">

                      @foreach($expertisess->chunk(7) as $expertises_chunk)


                      <div style="display:flex; flex-direction:column;">
                        @foreach($expertises_chunk as $expertises)


                        @if(count($expertises['expertises'])==0)
                        <li id="nav-menu-item-1420" class="menu-item menu-item-type-post_type menu-item-object-page" style=" margin-bottom:5px; ">
                          <a href="{{url('/expertise').'/'.str_replace(" ","_",$expertises['title'])}}" style="text-align:left;"> {{$expertises['title']}} </a>
                        </li>
                        @else
                        <li id="nav-menu-item-1420" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children sub" style=" margin-bottom:5px; ">
                          <a href="{{url('/expertise').'/'.str_replace(" ","_",$expertises['title'])}}" style="text-align:left;">  {{$expertises['title']}}  <i class="fa fa-arrow-right" style="margin-left: 3px;" aria-hidden="true"></i>

                 
                          <ul style="background:white;margin-left: 70px;">
                            @foreach($expertises['expertises'] as $child_expertise)
                            <li id="nav-menu-item-1012" class="menu-item menu-item-type-post_type menu-item-object-post "><a href="{{url('/expertise').'/'.str_replace(" ","_",$child_expertise['title'])}}" class=""><span class="item_outer"><span class="item_text">{{$child_expertise['title']}}</span></span></a></li>
                            @endforeach
                          </ul>

                        </li>


                        @endif












                        @endforeach

                      </div>


                      @endforeach







                    </ul>

                  </div>

                </div>

              </li>



              <!-- <li id=" nav-menu-item-60" class="{{ (request()->route()->uri == 'funding') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">

                      <a href="{{url('/funding')}}" class=""><span class="item_outer"><span class="item_text">Funding</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                      <div class="second">

                          <div class="inner">



                          </div>

                      </div>

                  </li> -->



              <li id="nav-menu-item-62" class="{{ (request()->route()->uri == 'career') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">

                <a href="{{url('/career')}}" class=""><span class="item_outer"><span class="item_text">Careers</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                <div class="second">

                  <div class="inner">



                  </div>

                </div>

              </li>



              <li id="nav-menu-item-62" class="{{ (request()->route()->uri == 'blog') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">

                <a href="{{url('/blog')}}" class=""><span class="item_outer"><span class="item_text">News & Insights</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                <div class="second">

                  <div class="inner">



                  </div>

                </div>

              </li>



              <li id="nav-menu-item-63" class="{{ (request()->route()->uri == 'contact') ? 'active' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide mkdf-wide-menu-centered">

                <a href="{{url('/contact')}}" class=""><span class="item_outer"><span class="item_text">Contact Us</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                <div class="second">

                  <div class="inner">



                  </div>

                </div>

              </li>
              <li id="nav-menu-item-63" class="{{ (request()->route()->uri == 'contact') ? 'active' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide mkdf-wide-menu-centered">

                <a href="{{url('/funding')}}" class=""><span class="item_outer"><span class="item_text">Funding</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                <div class="second">

                  <div class="inner">



                  </div>

                </div>

              </li>



            </ul>

          </nav>



        </div>

      </div>

      <div class="mkdf-position-right">

        <div class="mkdf-position-right-inner">

          

          <a style="color:rgb(0, 0, 0);" class="mkdf-side-menu-button-opener mkdf-icon-has-hover mkdf-side-menu-button-opener-icon-pack" tabindex="-1" href="#">

            <span class="mkdf-side-menu-icon">

              <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-menu "></span>

            </span>

          </a>

        </div>

      </div>

    </div>

  </div>

  <div class="mkdf-sticky-header">

    <div style="border-bottom:1px solid #5095cc ;" class="mkdf-sticky-holder mkdf-menu-left">

      <div class="mkdf-vertical-align-containers">

        <div class="mkdf-position-left">

          <div class="mkdf-position-left-inner">

            <div class="mkdf-logo-wrapper">

              <a itemprop="url" href="{{url('/')}}" style="height: 50px;">

                <img itemprop="image" class="mkdf-normal-logo" src="<?php echo asset('images' . '/' . \App\Models\Setting::first()->image) ?>" alt="logo" />

                <img itemprop="image" class="mkdf-dark-logo" src="<?php echo asset('images' . '/' . \App\Models\Setting::first()->image) ?>" alt="dark logo" />

                <img itemprop="image" class="mkdf-light-logo" src="<?php echo asset('images' . '/' . \App\Models\Setting::first()->image) ?>" alt="light logo" /> </a>

            </div>

            <nav class="mkdf-main-menu mkdf-drop-down mkdf-default-nav">

              <ul id="menu-main-menu-navigation" class="clearfix">

                <li id="nav-menu-item-58" class="{{ (request()->route()->uri == '/') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children has_sub wide mkdf-wide-menu-centered">

                  <a href="{{url('/')}}" class=" current "><span class="item_outer"><span class="item_text">Home</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                  <div class="second">

                    <div class="inner">



                    </div>

                  </div>

                </li>

                <li id="nav-menu-item-59" class="{{ (request()->route()->uri == 'team') ? 'mkdf-active-item' : '' }}menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">

                  <a href="{{url('/team')}}" class=""><span class="item_outer"><span class="item_text">Our
                        People</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                  <div class="second">

                    <div class="inner">



                    </div>

                  </div>

                </li>

                <li id="nav-menu-item-61" class="{{ (request()->route()->uri == 'expertise') ? 'mkdf-active-item' : '' }}menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">

                  <a href="#" class=""><span class="item_outer"><span class="item_text">Our Services
                      </span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                  <div class="second">

                    <div class="inner">



                    </div>

                  </div>

                </li>



                <!-- <li id="nav-menu-item-60" class="{{ (request()->route()->uri == 'funding') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">

                                  <a href="{{url('/funding')}}" class=""><span class="item_outer"><span class="item_text">Funding</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                                  <div class="second">

                                      <div class="inner">



                                      </div>

                                  </div>

                              </li> -->

                <li id="nav-menu-item-62" class="{{ (request()->route()->uri == 'career') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">

                  <a href="{{url('/career')}}" class=""><span class="item_outer"><span class="item_text">Careers</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                  <div class="second">

                    <div class="inner">



                    </div>

                  </div>

                </li>



                <li id="nav-menu-item-62" class="{{ (request()->route()->uri == 'blog') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow">

                  <a href="{{url('/blog')}}" class=""><span class="item_outer"><span class="item_text">News &
                        Insights</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                  <div class="second">

                    <div class="inner">



                    </div>

                  </div>

                </li>



                <li id="nav-menu-item-63" class="{{ (request()->route()->uri == 'career') ? 'mkdf-active-item' : '' }} menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub wide mkdf-wide-menu-centered">

                  <a href="{{url('/contact')}}" class=""><span class="item_outer"><span class="item_text">Contact
                        Us</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

                  <div class="second">

                    <div class="inner">



                    </div>

                  </div>

                </li>

              </ul>

            </nav>



          </div>

        </div>

        <div class="mkdf-position-right">

          <div class="mkdf-position-right-inner">

            <a style="margin: -2px 30px 0px;" class="mkdf-search-opener mkdf-icon-has-hover mkdf-search-opener-icon-pack" tabindex="-1" href="#">

              <span class="mkdf-search-opener-wrapper">

                <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-magnifier "></span> </span>

            </a>

            <a class="mkdf-side-menu-button-opener mkdf-icon-has-hover mkdf-side-menu-button-opener-icon-pack" tabindex="-1" href="#">

              <span class="mkdf-side-menu-icon">

                <span aria-hidden="true" class="mkdf-icon-linear-icons lnr lnr-menu "></span> </span>

            </a>

          </div>

        </div>

      </div>

    </div>

  </div>

  <form action="#" class="mkdf-search-cover" method="get">

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