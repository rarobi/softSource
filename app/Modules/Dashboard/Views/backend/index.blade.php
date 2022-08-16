@extends('backend.layouts.app')
@section('content')
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Welcome to Dashboard</h3>
        </div>

{{--        <div class="col-12 col-sm-6 col-md-3">--}}
{{--            <a href="{{ url('/news') }}">--}}
{{--                <div class="info-box">--}}
{{--                <span class="info-box-icon bg-info elevation-1">--}}
{{--                    <i class="fas fa-newspaper"></i>--}}
{{--                </span>--}}

{{--                    <div class="info-box-content">--}}
{{--                        <span class="info-box-text">Total News</span>--}}
{{--                        <span class="info-box-number">{!! $totalNews !!}</span>--}}
{{--                    </div>--}}
{{--                    <!-- /.info-box-content -->--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <!-- /.info-box -->--}}
{{--        </div>--}}
{{--        <!-- /.col -->--}}
{{--        <div class="col-12 col-sm-6 col-md-3">--}}
{{--           <a href="{{ url('/category') }}">--}}
{{--               <div class="info-box mb-3">--}}
{{--                <span class="info-box-icon bg-danger elevation-1">--}}
{{--                    <i class="fas fa-list"></i>--}}
{{--                </span>--}}

{{--                   <div class="info-box-content">--}}
{{--                       <span class="info-box-text">Total Category</span>--}}
{{--                       <span class="info-box-number">{!! $totalCategory !!}</span>--}}
{{--                   </div>--}}
{{--                   <!-- /.info-box-content -->--}}
{{--               </div>--}}
{{--           </a>--}}
{{--            <!-- /.info-box -->--}}
{{--        </div>--}}
{{--        <!-- /.col -->--}}

{{--        <!-- fix for small devices only -->--}}
{{--        <div class="clearfix hidden-md-up"></div>--}}

{{--        <div class="col-12 col-sm-6 col-md-3">--}}
{{--            <a href="{{ url('/video') }}">--}}
{{--                <div class="info-box mb-3">--}}
{{--                <span class="info-box-icon bg-success elevation-1">--}}
{{--                    <i class="fas fa-video"></i>--}}
{{--                </span>--}}

{{--                    <div class="info-box-content">--}}
{{--                        <span class="info-box-text">Total Video</span>--}}
{{--                        <span class="info-box-number">{!! $totalVideo !!}</span>--}}
{{--                    </div>--}}
{{--                    <!-- /.info-box-content -->--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <!-- /.info-box -->--}}
{{--        </div>--}}

{{--        <div class="col-12 col-sm-6 col-md-3">--}}
{{--            <a href="{{ url('/news') }}">--}}
{{--                <div class="info-box mb-3">--}}
{{--                <span class="info-box-icon bg-blue elevation-1">--}}
{{--                    <i class="fas fa-paperclip"></i>--}}
{{--                </span>--}}

{{--                    <div class="info-box-content">--}}
{{--                        <span class="info-box-text">Today's news</span>--}}
{{--                        <span class="info-box-number">{!! $todayNews !!}</span>--}}
{{--                    </div>--}}
{{--                    <!-- /.info-box-content -->--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <!-- /.info-box -->--}}
{{--        </div>--}}

{{--        <div class="col-12 col-sm-6 col-md-3">--}}
{{--           <a href="{{ url('/advertisement') }}">--}}
{{--               <div class="info-box mb-3">--}}
{{--                <span class="info-box-icon bg-success elevation-1">--}}
{{--                    <i class="fas fa-bullhorn"></i>--}}
{{--                </span>--}}

{{--                   <div class="info-box-content">--}}
{{--                       <span class="info-box-text">Advertisement</span>--}}
{{--                       <span class="info-box-number">{!! $totalAdd !!}</span>--}}
{{--                   </div>--}}
{{--                   <!-- /.info-box-content -->--}}
{{--               </div>--}}
{{--           </a>--}}
{{--            <!-- /.info-box -->--}}
{{--        </div>--}}
{{--        <!-- /.col -->--}}
{{--        <div class="col-12 col-sm-6 col-md-3">--}}
{{--            <a href="{{ url('/subscriber') }}">--}}
{{--                <div class="info-box mb-3">--}}
{{--                <span class="info-box-icon bg-warning elevation-1">--}}
{{--                    <i class="fas fa-users"></i>--}}
{{--                </span>--}}

{{--                    <div class="info-box-content">--}}
{{--                        <span class="info-box-text">Subscribers</span>--}}
{{--                        <span class="info-box-number">{{ $totalSubscriber }}</span>--}}
{{--                    </div>--}}
{{--                    <!-- /.info-box-content -->--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <!-- /.info-box -->--}}
{{--        </div>--}}
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection
