@extends('frontend.layouts.app')
@section('content')

    <div role="main" class="main">
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-about-us.jpg);">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">Our Team</h1>
                        <span class="sub-title">We are your next IT partner committed to innovate your business.</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li><a href="#">Home</a></li>
                            <li class="active">Pages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="ml-4 mr-4 mt-4 pt-2">
            <div class="sort-destination-loader-showing">
                <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                    @if(count($members) > 0)
                    @foreach($members as $member)
                        <div class="col-md-4 offset-1 isotope-item">
                        <div class="portfolio-item">
                            <a href="#">
                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        @if($member->photo)
                                        <img src="uploads/member_images/{!! $member->photo !!}" class="img-fluid border-radius-0" alt="" style="height: 350px;">
                                        @else
                                        <img src="assets/backend/img/dummy-profile.jpg" class="img-fluid border-radius-0" alt="" style="height: 350px;">
                                        @endif
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">{!! $member->name !!}</span>
                                            <span class="thumb-info-type">{!! $member->designation !!}</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>
@endsection



