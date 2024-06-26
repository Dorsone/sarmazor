@extends('client.layouts.main', ['body_class' => 'header-fixed sidebar-right header-style-2 topbar-style-1 menu-has-search'])

@section('content')

    <!-- Main Content -->
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap" class="container">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <article class="hentry data-effect">
                        <div class="post-media has-effect-icon offset-v-25 offset-h-24 data-effect-item clerafix">
                            <a href="{{route('client.blog.show', 1)}}"><img src="{{asset('assets/img/news/post-1-840x385.jpg')}}" alt="Image"></a>
                            <div class="post-calendar">
                                    <span class="inner">
                                        <span class="entry-calendar">
                                            <span class="day">23</span>
                                            <span class="month">MAY</span>
                                        </span>
                                    </span>
                            </div>
                            <div class="overlay-effect bg-color-1"></div>
                            <div class="elm-link">
                                <a href="{{route('client.blog.show', 1)}}" class="icon-1"></a>
                            </div>
                        </div><!-- /.post-media -->

                        <div class="post-content-wrap clearfix">
                            <h2 class="post-title">
                                    <span class="post-title-inner">
                                        <a href="{{route('client.blog.show', 1)}}">BIG TECH WILL GET BIGGER IN 2018, WHILE MALLER PLAYERS LOOK FOR EXITS</a>
                                    </span>
                            </h2><!-- /.post-title -->
                            <div class="post-meta">
                                <div class="post-meta-content">
                                    <div class="post-meta-content-inner">
                                        <span class="post-date item"><span class="inner"><span class="entry-date">May 23, 2018</span></span></span>
                                        <span class="post-by-author item"><span class="inner"><a href="#">By: Admin</a></span></span>
                                        <span class="comment item"><span class="inner"><a href="#">3 Comments</a></span></span>
                                    </div>
                                </div>
                            </div><!-- /.post-meta -->
                            <div class="post-content post-excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                            </div><!-- /.post-excerpt -->
                            <div class="post-read-more">
                                <div class="post-link">
                                    <a href="{{route('client.blog.show', 1)}}">READ MORE</a>
                                </div>
                            </div>
                        </div><!-- /.post-content-wrap -->
                    </article><!-- /.hentry -->

                    <article class="hentry data-effect">
                        <div class="post-media data-effect-item has-effect-icon offset-v-25 offset-h-24clerafix">
                            <a href="{{route('client.blog.show', 1)}}"><img src="{{ asset('assets/img/news/post-2-840x385.jpg') }}" alt="Image"></a>
                            <div class="post-calendar">
                                    <span class="inner">
                                        <span class="entry-calendar">
                                            <span class="day">23</span>
                                            <span class="month">MAY</span>
                                        </span>
                                    </span>
                            </div>
                            <div class="overlay-effect bg-color-1"></div>
                            <div class="elm-link">
                                <a href="{{route('client.blog.show', 1)}}" class="icon-1"></a>
                            </div>
                        </div><!-- /.post-media -->

                        <div class="post-content-wrap clearfix">
                            <h2 class="post-title">
                                    <span class="post-title-inner">
                                        <a href="{{route('client.blog.show', 1)}}">BIG TECH WILL GET BIGGER IN 2018, WHILE MALLER PLAYERS LOOK FOR EXITS</a>
                                    </span>
                            </h2><!-- /.post-title -->
                            <div class="post-meta">
                                <div class="post-meta-content">
                                    <div class="post-meta-content-inner">
                                        <span class="post-date item"><span class="inner"><span class="entry-date">May 23, 2018</span></span></span>
                                        <span class="post-by-author item"><span class="inner"><a href="#">By: Admin</a></span></span>
                                        <span class="comment item"><span class="inner"><a href="#">3 Comments</a></span></span>
                                    </div>
                                </div>
                            </div><!-- /.post-meta -->
                            <div class="post-content post-excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                            </div><!-- /.post-excerpt -->
                            <div class="post-read-more">
                                <div class="post-link">
                                    <a href="{{route('client.blog.show', 1)}}">READ MORE</a>
                                </div>
                            </div>
                        </div><!-- /.post-content-wrap -->
                    </article><!-- /.hentry -->

                    <article class="hentry margin-top-33 padding-top-45 data-effect">
                        <div class="post-media data-effect-item has-effect-icon offset-v-25 offset-h-24 clerafix">
                            <a href="{{route('client.blog.show', 1)}}"><img src="{{ asset('assets/img/news/post-3-840x385.jpg') }}" alt="Image"></a>
                            <div class="post-calendar">
                                    <span class="inner">
                                        <span class="entry-calendar">
                                            <span class="day">23</span>
                                            <span class="month">MAY</span>
                                        </span>
                                    </span>
                            </div>
                            <div class="overlay-effect bg-color-1"></div>
                            <div class="elm-link">
                                <a href="{{route('client.blog.show', 1)}}" class="icon-1"></a>
                            </div>
                        </div><!-- /.post-media -->

                        <div class="post-content-wrap clearfix">
                            <h2 class="post-title">
                                    <span class="post-title-inner">
                                        <a href="{{route('client.blog.show', 1)}}">BIG TECH WILL GET BIGGER IN 2018, WHILE MALLER PLAYERS LOOK FOR EXITS</a>
                                    </span>
                            </h2><!-- /.post-title -->
                            <div class="post-meta">
                                <div class="post-meta-content">
                                    <div class="post-meta-content-inner">
                                        <span class="post-date item"><span class="inner"><span class="entry-date">May 23, 2018</span></span></span>
                                        <span class="post-by-author item"><span class="inner"><a href="#">By: Admin</a></span></span>
                                        <span class="comment item"><span class="inner"><a href="#">3 Comments</a></span></span>
                                    </div>
                                </div>
                            </div><!-- /.post-meta -->
                            <div class="post-content post-excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                            </div><!-- /.post-excerpt -->
                            <div class="post-read-more">
                                <div class="post-link">
                                    <a href="{{route('client.blog.show', 1)}}">READ MORE</a>
                                </div>
                            </div>
                        </div><!-- /.post-content-wrap -->
                    </article><!-- /.hentry -->

                    <div class="themesflat-pagination clearfix">
                        <ul>
                            <li><a href="#" class="page-numbers prev"><span class="fa fa-angle-left"></span></a></li>
                            <li><a href="#" class="page-numbers current">1</a></li>
                            <li><a href="#" class="page-numbers">2</a></li>
                            <li><a href="#" class="page-numbers next"><span class="fa fa-angle-right"></span></a></li>
                        </ul>
                    </div>
                </div><!-- /#inner-content -->
            </div><!-- /#site-content -->
            <div id="sidebar">
                <div class="themesflat-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
                <div id="inner-sidebar" class="inner-content-wrap">
                    <div class="widget widget_search">
                        <form action="#" method="get" role="search" class="search-form style-1">
                            <input type="search" class="search-field" placeholder="Search..." value="" name="s" title="Search for">
                            <button class="search-submit" type="submit" title="Search">Search</button>
                        </form>
                    </div><!-- /.widget_search -->

                    <div class="widget widget_follow">
                        <h2 class="widget-title"><span>FOLLOW US</span></h2>
                        <div class="follow-wrap clearfix col3 g8">
                            <div class="follow-item facebook">
                                <div class="inner">
                                        <span class="socials">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <span class="text">43217 likes</span>
                                        </span>
                                </div>
                            </div>
                            <div class="follow-item twitter">
                                <div class="inner">
                                        <span class="socials">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <span class="text">3752 flowers</span>
                                        </span>
                                </div>
                            </div>
                            <div class="follow-item google">
                                <div class="inner">
                                        <span class="socials">
                                            <a href="#"><i class="fa fa-google"></i></a>
                                            <span class="text">432 contacter</span>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.widget_follow -->

                    <div class="widget widget_lastest">
                        <h2 class="widget-title"><span>PRECENT POST</span></h2>
                        <ul class="lastest-posts data-effect clearfix">
                            <li class="clearfix">
                                <div class="thumb data-effect-item has-effect-icon ">
                                    <img src="{{ asset('assets/img/news/post-1-65x65.jpg') }}" alt="Image">
                                    <div class="overlay-effect bg-color-2"></div>
                                    <div class="elm-link">
                                        <a href="{{route('client.blog.show', 1)}}" class="icon-2"></a>
                                    </div>
                                </div>
                                <div class="text">
                                    <h3><a href="{{route('client.blog.show', 1)}}">SMART BUILDING WITH CONCRETE SUSTAINABLE</a></h3>
                                    <span class="post-date"><span class="entry-date">29 June 2018</span></span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="thumb data-effect-item has-effect-icon">
                                    <img src="{{ asset('assets/img/news/post-2-65x65.jpg') }}" alt="Image">
                                    <div class="overlay-effect bg-color-2"></div>
                                    <div class="elm-link">
                                        <a href="{{route('client.blog.show', 1)}}" class="icon-2"></a>
                                    </div>
                                </div>
                                <div class="text">
                                    <h3><a href="{{route('client.blog.show', 1)}}">HI-TECH WOODEN HOUSE BUILT WITHOUT GLUE</a></h3>
                                    <span class="post-date"><span class="entry-date">31 June 2018</span></span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="thumb data-effect-item has-effect-icon" >
                                    <img src="{{ asset('assets/img/news/post-3-65x65.jpg') }}" alt="Image">
                                    <div class="overlay-effect bg-color-2"></div>
                                    <div class="elm-link">
                                        <a href="{{route('client.blog.show', 1)}}" class="icon-2"></a>
                                    </div>
                                </div>
                                <div class="text">
                                    <h3><a href="{{route('client.blog.show', 1)}}">HI-TECH WOODEN HOUSE BUILT WITHOUT GLUE</a></h3>
                                    <span class="post-date"><span class="entry-date">31 June 2018</span></span>
                                </div>
                            </li>
                        </ul>
                    </div><!-- /.widget_lastest -->

                    <div class="widget widget_tags margin-top-55">
                        <h2 class="widget-title"><span>TAGS</span></h2>
                        <div class="tags-list">
                            <a href="#">Building</a>
                            <a href="#">Smart House</a>
                            <a href="#">Costruction</a>
                            <a href="#">Villa</a>
                            <a href="#">Residential</a>
                            <a href="#">Interior</a>
                            <a href="#">Resort</a>
                            <a href="#">Commercial</a>
                        </div>
                    </div>
                </div>
            </div><!-- /#sidebar -->
        </div><!-- /#content-wrap -->
    </div><!-- /#main-content -->

@endsection
