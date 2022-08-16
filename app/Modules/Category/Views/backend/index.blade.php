@extends('backend.layouts.app')
@section('content')
    <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Category List
                        </h4>
                    </div><!--col-->

                    <div class="col-sm-7">
                        <div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
                            <a href="{!! route('category.create') !!}" class="btn btn-info ml-1" data-toggle="tooltip" title="@lang('labels.general.create_new')"><i class="fas fa-plus-circle"></i></a>
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
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($totalCategory as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ isset($category->name) ? $category->name : 'N/A' }}</td>
                                            <td> {!! isset($category->slug) ? $category->slug : 'N/A' !!}
                                            </td>
                                            <td>{{ isset($category->position) ? $category->position : 'N/A' }}</td>
                                            <td>@if($category->status == 1)
                                                    Active
                                                @else
                                                    In-active
                                                @endif
                                            </td>
                                            <td>
                                                <form  action="{{ route('category.destroy', $category->id) }}" method="post">
                                                    @method('DELETE')
                                                    {!! csrf_field() !!}
                                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-info"title="Edit"><i class="fa fa-edit"></i></a>
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
