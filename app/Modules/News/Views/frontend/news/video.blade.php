@extends('frontend.layouts.app')
@section('content')
    <!-- Start Blog Area
    ============================================= -->
    <div class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3><strong>Videos</strong></h3>
                    <hr class="separator">
                    <div class="row">
                        @if(count($video_list) > 0)
                        <!-- Single Item -->
                        @foreach($video_list as $video)
                            <div class="col-md-4 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{!! url('{lang}/video', $video->id) !!}">
                                        <iframe width="360" height="270" src="https://www.youtube.com/embed/{!! $video->video !!}" frameborder="0" allowfullscreen></iframe>
                                    </a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="{!! url('{lang}/video', $video->id) !!}">{!! $video->video_title !!}</a>
                                    </h4>
                                    <p>
                                        {!! \Illuminate\Support\Str::limit($video->details, 150, $end='...') !!}
                                    </p>
                                    <div class="meta">
                                        <a href="{!! url('{lang}/video', $video->id) !!}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Single Item -->
                        @else
                        <p class="text-center"> No data found</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 single-item">
                    <div class="item">
                        <div class="info">
                            <h4>
                                <a href="{!! url('{lang}/video/1') !!}">Advertise Section</a>
                            </h4>
                            <p>
                                Minuter highest his arrived for put and. Hopes lived by rooms oh in no death house.
                                Contented direction september but end led excellent ourselves may. Ferrars few arrival
                            </p>
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



