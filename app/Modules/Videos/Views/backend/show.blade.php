@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Video Details
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
                                <td>{!! $video->video_title !!}</td>
                            </tr>
                            <tr>
                                <td>Video</td>
                                <td>
                                    @if($video->video)
                                        <iframe width="600" height="300" src="https://www.youtube.com/embed/{!! $video->video !!}" frameborder="0" allowfullscreen></iframe>
                                    @else
                                        N/A
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{!! $video->details !!}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    @if($video->status == 1)
                                        Active
                                    @else
                                        In-active
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
