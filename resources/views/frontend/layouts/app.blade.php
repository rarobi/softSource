<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> SoftSourceBD | International IT, Software Consulting & Services since 2004 </title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{!! asset('assets/frontend/collection/img/favicon.ico') !!}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{!! asset('assets/frontend/collection/img/apple-touch-icon.png') !!}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

    <!-- Vendor CSS -->
    {!! Html::style('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('assets/frontend/vendor/fontawesome-free/css/all.min.css') !!}
    {!! Html::style('assets/frontend/vendor/animate/animate.min.css') !!}
    {!! Html::style('assets/frontend/vendor/simple-line-icons/css/simple-line-icons.min.css') !!}
    {!! Html::style('assets/frontend/vendor/owl.carousel/assets/owl.carousel.min.css') !!}
    {!! Html::style('assets/frontend/vendor/owl.carousel/assets/owl.theme.default.min.css') !!}
    {!! Html::style('assets/frontend/vendor/magnific-popup/magnific-popup.min.css') !!}

    <!-- Theme CSS -->
    {!! Html::style('assets/frontend/collection/css/theme.css') !!}
    {!! Html::style('assets/frontend/collection/css/theme-elements.css') !!}
    {!! Html::style('assets/frontend/collection/css/theme-blog.css') !!}
    {!! Html::style('assets/frontend/collection/css/theme-shop.css') !!}

    <!-- Current Page CSS -->
    {!! Html::style('assets/frontend/vendor/rs-plugin/css/settings.css') !!}
    {!! Html::style('assets/frontend/vendor/rs-plugin/css/layers.css') !!}
    {!! Html::style('assets/frontend/vendor/rs-plugin/css/navigation.css') !!}

    <!-- Demo CSS -->

    <!-- Theme CSS -->
    {!! Html::style('assets/frontend/collection/css/theme.css') !!}
    {!! Html::style('assets/frontend/collection/css/theme-elements.css') !!}
    {!! Html::style('assets/frontend/collection/css/theme-blog.css') !!}
    {!! Html::style('assets/frontend/collection/css/theme-shop.css') !!}

    <!-- Skin CSS -->
    {!! Html::style('assets/frontend/collection/css/skins/default.css') !!}

    <!-- Theme Custom CSS -->
    {!! Html::style('assets/frontend/collection/css/custom.css') !!}

    <!-- Head Libs -->
    {!! Html::script('assets/frontend/vendor/modernizr/modernizr.min.js') !!}

</head>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<body class="one-page" data-target="#header" data-spy="scroll" data-offset="100">

<div class="body">
{{--    this layout is used--}}
    @include('frontend.includes.header')

    @yield('content')

    @include('frontend.includes.footer')

</div>

<!-- Vendor -->
{!! Html::script('assets/frontend/vendor/jquery/jquery.min.js') !!}
{!! Html::script('assets/frontend/vendor/jquery.appear/jquery.appear.min.js') !!}
{!! Html::script('assets/frontend/vendor/jquery.easing/jquery.easing.min.js') !!}
{!! Html::script('assets/frontend/vendor/jquery.cookie/jquery.cookie.min.js') !!}
{!! Html::script('assets/frontend/vendor/popper/umd/popper.min.js') !!}
{!! Html::script('assets/frontend/vendor/bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('assets/frontend/vendor/common/common.min.js') !!}
{!! Html::script('assets/frontend/vendor/jquery.validation/jquery.validate.min.js') !!}
{!! Html::script('assets/frontend/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') !!}
{!! Html::script('assets/frontend/vendor/jquery.gmap/jquery.gmap.min.js') !!}
{!! Html::script('assets/frontend/vendor/jquery.lazyload/jquery.lazyload.min.js') !!}
{!! Html::script('assets/frontend/vendor/isotope/jquery.isotope.min.js') !!}
{!! Html::script('assets/frontend/vendor/owl.carousel/owl.carousel.min.js') !!}
{!! Html::script('assets/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js') !!}
{!! Html::script('assets/frontend/vendor/vide/jquery.vide.min.js') !!}
{!! Html::script('assets/frontend/vendor/vivus/vivus.min.js') !!}

<!-- Theme Base, Components and Settings -->
{!! Html::script('assets/frontend/collection/js/theme.js') !!}

<!-- Current Page Vendor and Views -->
{!! Html::script('assets/frontend/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') !!}
{!! Html::script('assets/frontend/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') !!}
{!! Html::script('assets/frontend/collection/js/views/view.contact.js') !!}

<!-- Theme Custom -->
{!! Html::script('assets/frontend/collection/js/custom.js') !!}

<!-- Theme Initialization Files -->
{!! Html::script('assets/frontend/collection/js/theme.init.js') !!}

<!-- Examples -->
{!! Html::script('assets/frontend/collection/js/examples/examples.portfolio.js') !!}

@yield('footer-script')

{{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>--}}
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v3.2'
        });
    };
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>
