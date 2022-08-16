@extends('frontend.layouts.app')
@section('content')
    <!-- Start Blog Area
    ============================================= -->
    <div class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3><strong>Video</strong></h3>
                    <hr class="separator">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-md-12 single-item">
                            <div class="cart-body">
                                <div class="col-md-12">
                                    <h4>
                                        {!! $video->video_title !!}
                                    </h4>
                                    <div class="thumb">
                                        <iframe width="720" height="300" src="https://www.youtube.com/embed/{!! $video->video !!}" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="info">
                                        <p>
                                        <span>{{ \Carbon\Carbon::parse($video->created_at)->format('M d, Y') }}</span><br>
                                            {!! $video->details !!}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-md-12 single-item">
                            <div class="item">
                                <div class="info">
                                    <h4>
                                        <a href="blog-single-left-sidebar.html">Advertise Section</a>
                                    </h4>
                                    <p>
                                        Minuter highest his arrived for put and. Hopes lived by rooms oh in no death house.
                                        Contented direction september but end led excellent ourselves may. Ferrars few arrival
                                    </p>
                                    <h3 class="text-center">779px X 164px</h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
                <div class="col-md-4">
                    <h3><strong>Other Videos</strong></h3>
                    <hr class="separator">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-md-12 single-item">
                        @if(count($video_list) > 0)
                            <ul>
                                @foreach($video_list as $video)
                                <li>
                                    <div class="col-md-4">
                                        <div class="thumb">
                                            <a href="{!! url('{lang}/video/1') !!}">
                                                <iframe width="90" height="70" src="https://www.youtube.com/embed/0cYi6YbE3jw" frameborder="0" allowfullscreen></iframe>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <p> <a href="{!! url('{lang}/video', $video->id) !!}">{!! $video->video_title !!}</a> <br>
                                            {{ \Carbon\Carbon::now()->format('M d, Y') }}
                                        </p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-center"> No data found</p>
                        @endif
                        </div>
                        <!-- End Single Item -->
                    </div>

                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-md-12 single-item">
                            <div class="item">
                                <div class="info">
                                    <h4>
                                        <a href="blog-single-left-sidebar.html">Advertise Section</a>
                                    </h4>
                                    <p>
                                        Minuter highest his arrived for put and. Hopes lived by rooms oh in no death house.
                                        Contented direction september but end led excellent ourselves may. Ferrars few arrival
                                    </p>
                                    <h3 class="text-center">380px X 259px</h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>

                    <h3><strong>NEWSLETTER</strong></h3>
                    <hr class="separator">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-md-12 single-item">
                            <div class="item">
                                <div class="info">
                                    <h4>
                                        <a href="blog-single-left-sidebar.html">Get Updates</a>
                                    </h4>
                                    <p>
                                        Subscribe our newsletter to get the best stories into your inbox!
                                    </p>
                                    <p>
                                        <input type="email" class="form-control" name="newslatter" placeholder="Email">
                                    </p>
                                    <button class="btn btn-info"> Subscribe</button>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>

                    <h3><strong>Follow Us</strong></h3>
                    <hr class="separator">
                    <div class="row">
                        <!-- Single Item -->
                        <div class="col-md-3 single-item">
                            <div class="item">
                                <div class="info">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-3 single-item">
                            <div class="item">
                                <div class="info">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-3 single-item">
                            <div class="item">
                                <div class="info">
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-3 single-item">
                            <div class="item">
                                <div class="info">
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>
                                <a href="blog-single-left-sidebar.html">Advertise Section</a>
                            </h4>
                            <p>
                                Minuter highest his arrived for put and. Hopes lived by rooms oh in no death house.
                                Contented direction september but end led excellent ourselves may. Ferrars few arrival
                            </p>
                            <h3 class="text-center">975px X 200px</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Clients Area
    ============================================= -->
{{--    <div class="clients-area bg-theme default-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="clients-items owl-carousel owl-theme text-center">--}}
{{--                        <div class="single-item">--}}
{{--                            <a href="#"><img src="assets/frontend/img/clients/01.png" alt="Clients"></a>--}}
{{--                        </div>--}}
{{--                        <div class="single-item">--}}
{{--                            <a href="#"><img src="assets/frontend/img/clients/02.png" alt="Clients"></a>--}}
{{--                        </div>--}}
{{--                        <div class="single-item">--}}
{{--                            <a href="#"><img src="assets/frontend/img/clients/03.png" alt="Clients"></a>--}}
{{--                        </div>--}}
{{--                        <div class="single-item">--}}
{{--                            <a href="#"><img src="assets/frontend/img/clients/04.png" alt="Clients"></a>--}}
{{--                        </div>--}}
{{--                        <div class="single-item">--}}
{{--                            <a href="#"><img src="assets/frontend/img/clients/05.png" alt="Clients"></a>--}}
{{--                        </div>--}}
{{--                        <div class="single-item">--}}
{{--                            <a href="#"><img src="assets/frontend/img/clients/06.png" alt="Clients"></a>--}}
{{--                        </div>--}}
{{--                        <div class="single-item">--}}
{{--                            <a href="#"><img src="assets/frontend/img/clients/07.png" alt="Clients"></a>--}}
{{--                        </div>--}}
{{--                        <div class="single-item">--}}
{{--                            <a href="#"><img src="assets/frontend/img/clients/08.png" alt="Clients"></a>--}}
{{--                        </div>--}}
{{--                        <div class="single-item">--}}
{{--                            <a href="#"><img src="assets/frontend/img/clients/01.png" alt="Clients"></a>--}}
{{--                        </div>--}}
{{--                        <div class="single-item">--}}
{{--                            <a href="#"><img src="assets/frontend/img/clients/05.png" alt="Clients"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- End Clients Area -->
@endsection



