@extends('frontend.layouts.app')
@section('content')

    <div role="main" class="main">
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-about-us.jpg);">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">Our Protfolio</h1>
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
        <div class="container py-2">
            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
                @if(count($portfolios) > 0)
                @foreach($portfolios as $portfolio)
                    <li class="nav-item" data-option-value=".{!! $portfolio->category->name !!}"><a class="nav-link text-1 text-uppercase" href="#">{!! $portfolio->category->name !!}</a></li>
                @endforeach
                @endif
            </ul>

        </div>

        <div class="ml-4 mr-4 mt-4 pt-2">
            <div class="sort-destination-loader sort-destination-loader-showing">
                <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                    @if(count($portfolios) > 0)
                    @foreach($portfolios as $portfolio)
                    <div class="col-md-4 isotope-item {!! $portfolio->category->name !!}">
                        <div class="portfolio-item">
                            <a href="{!! route('portfolio') !!}">
                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="uploads/portfolio_images/{!! $portfolio->photo !!}" class="img-fluid border-radius-0" alt="">

                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">{!! $portfolio->title !!}</span>
                                            <span class="thumb-info-type">{!! $portfolio->category->name !!}</span>
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



