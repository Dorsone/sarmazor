<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Autora - Construction Business HTMl Template</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors/color1.css') }}" id="colors">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/icon/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/icon/apple-touch-icon-158-precomposed.png') }}">

    <!--[if lt IE 9]><script src="{{ asset('javascript/html5shiv.js') }}"></script><script src="{{ asset('javascript/respond.min.js') }}"></script><![endif]-->

</head>

@props(['body_class' => 'header-fixed page no-sidebar header-style-2 topbar-style-1 menu-has-search'])

<body class="{{$body_class}}">

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        @include('client.components.header')

        @if(request()->path() !== '/')
            @include('client.components.breadcrumbs')
        @endif

        @yield('content')

        @include('client.components.footer')
    </div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/tether.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/animsition.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/countto.js') }}"></script>
<script src="{{ asset('assets/js/equalize.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel2.thumbs.js') }}"></script>

<script src="{{ asset('assets/js/jquery.cookie.js') }}"></script>
<script src="{{ asset('assets/js/gmap3.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>
<script src="{{ asset('assets/js/shortcodes.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Revolution Slider -->
<script src="{{ asset('includes/rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('includes/rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('assets/js/rev-slider.js') }}"></script>

<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
@if(app()->environment('local'))
    <script src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('includes/rev-slider/js/extensions/revolution.extension.video.min.js') }}"></script>
@endif

@yield('scripts')

</body>
</html>
