<!-- Start Header Bottom
    ============================================= -->
<header id="home" class="fixed">
    <!-- Start Navigation -->
    <nav class="navbar navb attr-border navbar-sticky bootsnav">
        <div class="container">

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{!! url('/') !!}">
                    <img src="{!! asset('assets/frontend/img/our_logo.png') !!}" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li class="dropdown">
                        <a href="{!! url('/') !!}">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>

                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Price</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->
    <div class="row">
        <div class="col-md-12 carousal-div">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="assets/frontend/img/bg/header_bg.jpg" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 style="color: #fff;">First slide label</h2>
                            <p style="color: #fff;">Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/frontend/img/bg/header_bg2.jpg" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 style="color: #fff;">First slide label</h2>
                            <p style="color: #fff;">Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/frontend/img/gallery/slider03.jpg" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 style="color: #fff;">First slide label</h2>
                            <p style="color: #fff;">Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/frontend/img/gallery/slider04.jpg" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 style="color: #fff;">First slide label</h2>
                            <p style="color: #fff;">Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/frontend/img/gallery/slider05.jpg" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 style="color: #fff;">First slide label</h2>
                            <p style="color: #fff;">Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control carousel-control-prev" href="#carousel-example-generic"
                   role="button" data-slide="prev">
                    <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control carousel-control-next" href="#carousel-example-generic"
                   role="button" data-slide="next">
                    <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</header>
<!-- End Header Bottom
    ============================================= -->
