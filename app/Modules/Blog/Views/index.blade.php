@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Blog List
                    </h4>
                </div><!--col-->

                <div class="col-sm-7">
                    <div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
                        <a href="{!! route('blog.create') !!}" class="btn btn-info ml-1" data-toggle="tooltip" title="@lang('labels.general.create_new')"><i class="fas fa-plus-circle"></i></a>
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
                                <th>Title</th>
                                <th>Details</th>
                                <th>Photo</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogList as $blog)
                                <tr>
                                    <td>{{ $blog->id }}</td>
                                    <td>{{ isset($blog->title) ? $blog->title : 'N/A' }}</td>
{{--                                    <td> {!! isset($blog->category_id) ? $blog->category_id : 'N/A' !!}--}}
                                    </td>
                                    <td>{!! isset($blog->content) ? \Illuminate\Support\Str::limit($blog->content, 50, $end='...') : 'N/A' !!}  </td>
                                    <td>@if($blog->featured_image)
                                            <img src="/uploads/blog_images/{{ $blog->featured_image }}" height="50" width="100">
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>@if($blog->status == 1)
                                            Active
                                        @else
                                            In-active
                                        @endif
                                    </td>
                                    <td>
                                        <form  action="{{ route('blog.destroy', $blog->id) }}" method="post">
                                            @method('DELETE')
                                            {!! csrf_field() !!}
                                            <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-sm btn-success"title="View"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-info"title="Edit"><i class="fa fa-edit"></i></a>
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
