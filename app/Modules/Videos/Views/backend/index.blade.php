@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Video List
                    </h4>
                </div><!--col-->

                <div class="col-sm-7">
                    <div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
                        <a href="{!! route('video.create') !!}" class="btn btn-info ml-1" data-toggle="tooltip" title="@lang('labels.general.create_new')"><i class="fas fa-plus-circle"></i></a>
                    </div><!--btn-toolbar-->
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Video</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($videoList as $video)
                                <tr>
                                    <td>{{ $video->id }}</td>
                                    <td>
                                        @if($video->video)
                                            <iframe width="300" height="200" src="https://www.youtube.com/embed/{!! $video->video !!}" frameborder="0" allowfullscreen></iframe>
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>{{ isset($video->video_title) ? $video->video_title : 'N/A' }}</td>
                                    <td>@if($video->status == 1)
                                            Active
                                        @else
                                            In-active
                                        @endif
                                    </td>
                                    <td>
                                        <form  action="{{ route('video.destroy', $video->id) }}" method="post">
                                            @method('DELETE')
                                            {!! csrf_field() !!}
                                            <a href="{{ route('video.show', $video->id) }}" class="btn btn-sm btn-success"title="View"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('video.edit', $video->id) }}" class="btn btn-sm btn-info"title="Edit"><i class="fa fa-edit"></i></a>
                                            <button type="submit" class="btn btn-sm btn-danger discard-team" title="Discard"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

    </div><!--card-->

@endsection
