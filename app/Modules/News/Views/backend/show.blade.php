@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        News Details
                    </h4>
                </div><!--col-->

                <div class="col-sm-7">
                    <div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
                        <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-reply"></i> Back</button>
                    </div><!--btn-toolbar-->
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>Title</td>
                                <td>{!! $news->title !!}</td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td>{!! $news->category_id !!}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{!! $news->content !!}</td>
                            </tr>
                            <tr>
                                <td>Tag</td>
                                <td>{!! $news->tags !!}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    @if($news->status == 1)
                                        Active
                                    @else
                                        In-active
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>is_breaking_news</td>
                                <td>
                                    @if($news->is_breaking_news == 1)
                                        Active
                                    @else
                                        In-active
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>is_latest_news</td>
                                <td>
                                    @if($news->is_latest_news == 1)
                                        Active
                                    @else
                                        In-active
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>is_home_slider_news</td>
                                <td>
                                    @if($news->is_home_slider_news == 1)
                                        Active
                                    @else
                                        In-active
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>is_schedule_news</td>
                                <td>
                                    @if($news->is_schedule_news == 1)
                                        Active
                                    @else
                                        In-active
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Featured Image</td>
                                <td>
                                    @if($news->featured_image)
                                        <img src="/uploads/featured_images/{{ $news->featured_image }}" height="50" width="100">
                                    @else
                                        N/A
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div><!--col-->
            </div><!--row-->
            <hr>
            <div class="row mb-5">
                <div class="col ml-5">
                    <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-reply"></i> Back</button>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

    </div><!--card-->

@endsection
