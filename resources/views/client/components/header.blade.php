<!-- Header Wrap -->
<div id="site-header-wrap">
    <!-- Top Bar -->
    <div id="top-bar">
        <div id="top-bar-inner" class="container">
            <div class="top-bar-inner-wrap">
                <div class="top-bar-content">
                    <div class="inner">
                        @include('client.spatials.navbar.contacts')
                    </div>
                </div><!-- /.top-bar-content -->

                <div class="top-bar-socials">
                    <div class="inner">
                        <span class="text">Follow us:</span>
                        <span class="icons">
                            @include('client.spatials.navbar.socials')
                        </span>
                    </div>
                </div><!-- /.top-bar-socials -->
            </div>
        </div>
    </div><!-- /#top-bar -->

    <!-- Header -->
    <header id="site-header">
        <div id="site-header-inner" class="container">
            <div class="wrap-inner clearfix">
                <div id="site-logo" class="clearfix">
                    <div id="site-log-inner">
                        <a href="{{ route('client.home') }}" rel="home" class="main-logo">
                            <img src="{{ asset('assets/img/logo-small.png') }}" alt="Logo" width="186"
                                 height="39"
                                 data-retina="{{ asset('assets/img/logo-small@2x.png') }}" data-width="186"
                                 data-height="39">
                        </a>
                    </div>
                </div><!-- /#site-logo -->

                <div class="mobile-button">
                    <span></span>
                </div><!-- /.mobile-button -->

                <nav id="main-nav" class="main-nav">
                    @include('client.spatials.navbar.items')
                </nav><!-- /#main-nav -->
            </div><!-- /.wrap-inner -->
        </div><!-- /#site-header-inner -->
    </header><!-- /#site-header -->
</div><!-- #site-header-wrap -->


