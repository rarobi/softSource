@extends('frontend.layouts.app')
@section('content')

    <div role="main" class="main">
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-about-us.jpg);">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">Our Blog</h1>
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

        <section class="section section-height-4 bg-color-grey-scale-1 border-0 m-0" id="ourblog">
            <div class="container container-xl">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-xl-6 text-center">
                        <p class="font-weight-light text-color-dark line-height-9 text-4 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="350">Blogging is a great way to show your talents and interests to prospective... </p>
                    </div>
                </div>
                <div id="portfolioLoadMoreWrapperBlog" class="row portfolio-list sort-destination pb-2" data-sort-id="portfolio" data-total-pages="3" data-ajax-url="ajax/demo-architecture-interior-blog-ajax-load-more-">
                    @if(count($blogs) > 0)
                        @foreach($blogs as $blog)
                            <div class="col-lg-4 isotope-item text-left">
                                <div class="portfolio-item appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="450">
                                    <div class="card">
                                        <div class="card-body p-5 mt-2">
                                            <h3 class="font-weight-bold text-transform-none line-height-4 text-5 pr-xl-5 mr-xl-5">
                                                <a href="{!! route('blog-details', $blog->id) !!}" class="text-color-dark text-decoration-none">{!! $blog->title!!}</a>
                                            </h3>
                                            <p class="mb-4">{!! \Illuminate\Support\Str::limit($blog->content, 150, $end='...')  !!}</p>
                                            <?php
                                            $user = DB::table('users')->where('id', $blog->created_by)->first();
                                            ?>
                                            <p class="mb-4">By {!! $user->name  !!}  <span class="float-right">Created At: {!! $blog->created_at  !!}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div id="portfolioLoadMoreBtnWrapperBlog" class="row">
                    <div class="col text-center">

                        <div id="portfolioLoadMoreLoaderBlog" class="portfolio-load-more-loader" style="min-height: 61px;">
                            <div class="bounce-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection



