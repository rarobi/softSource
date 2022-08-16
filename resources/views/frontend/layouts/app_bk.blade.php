<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SoftSourceBD - SEO & Digital Marketing Agency Template">
    @yield('meta')

    <title>{{ env('APP_NAME','Application') }} | @yield('title','Home')</title>

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    {!! Html::style('assets/frontend/img/favicon.png') !!}
    {!! Html::style('assets/frontend/css/bootstrap.min.css') !!}
    {!! Html::style('assets/frontend/css/font-awesome.min.css') !!}
    {!! Html::style('assets/frontend/css/flaticon-set.css') !!}
    {!! Html::style('assets/frontend/css/magnific-popup.css') !!}
    {!! Html::style('assets/frontend/css/owl.carousel.min.css') !!}
    {!! Html::style('assets/frontend/css/owl.theme.default.min.css') !!}
    {!! Html::style('assets/frontend/css/animate.css') !!}
    {!! Html::style('assets/frontend/css/bootsnav.css') !!}
    {!! Html::style('assets/frontend/css/style.css') !!}
    {!! Html::style('assets/frontend/css/responsive.css') !!}
    {!! Html::style('assets/frontend/css/main.css') !!}
    <style type="text/css">
        /* chatbot position*/
        .fb_dialog.fb_dialog_advanced {
            right: 18pt;
            margin-right: 50px;
        }
        iframe.fb_customer_chat_bounce_in_v2 {
            right: 9pt;
            margin-right: 50px;
        }
        iframe.fb_customer_chat_bounce_out_v2 {
            right: 9pt;
            margin-right: 50px;
        }
    </style>
    @yield('header-css')

    <!-- ========== End Stylesheet ========== -->
</head>

<body>
<!--Header
    ============================================= -->
    @include('frontend.includes.header')

    @yield('content')
<!-- Footer
============================================= -->
    @include('frontend.includes.footer')

<!-- jQuery Frameworks
============================================= -->
{!! Html::script('assets/frontend/js/jquery-1.12.4.min.js') !!}
{!! Html::script('assets/frontend/js/bootstrap.min.js') !!}
{!! Html::script('assets/frontend/js/equal-height.min.js') !!}
{!! Html::script('assets/frontend/js/jquery.appear.js') !!}
{!! Html::script('assets/frontend/js/jquery.easing.min.js') !!}
{!! Html::script('assets/frontend/js/jquery.magnific-popup.min.js') !!}
{!! Html::script('assets/frontend/js/modernizr.custom.13711.js') !!}
{!! Html::script('assets/frontend/js/owl.carousel.min.js') !!}
{!! Html::script('assets/frontend/js/wow.min.js') !!}
{!! Html::script('assets/frontend/js/progress-bar.min.js') !!}
{!! Html::script('assets/frontend/js/isotope.pkgd.min.js') !!}
{!! Html::script('assets/frontend/js/imagesloaded.pkgd.min.js') !!}
{!! Html::script('assets/frontend/js/count-to.js') !!}
{!! Html::script('assets/frontend/js/bootsnav.js') !!}
{!! Html::script('assets/frontend/js/main.js') !!}

@yield('footer-script')


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
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

<div class="fb-customerchat"
     attribution=setup_tool
     page_id="255106722012330"
     theme_color="#ED9B31">
</div>

</body>
</html>
