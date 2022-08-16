@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Advertisement List
                    </h4>
                </div><!--col-->

                <div class="col-sm-7">
                    <div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
                        <a href="{!! route('advertisement.create') !!}" class="btn btn-info ml-1" data-toggle="tooltip" title="@lang('labels.general.create_new')"><i class="fas fa-plus-circle"></i></a>
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
                                <th>Advertisement Type</th>
                                <th>Advertisement Size</th>
                                <th>Total View</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($advertisementList as $advertisement)
                                <tr>
                                    <td>{{ $advertisement->id }}</td>
                                    <td>{{ isset($advertisement->advertise_type) ? $advertisement->advertise_type : 'N/A' }}</td>
                                    <td> {!! isset($advertisement->advertise_size) ? $advertisement->advertise_size : 'N/A' !!}</td>
                                    <td> {!! isset($advertisement->total_view) ? $advertisement->total_view : 'N/A' !!}</td>
                                    <td>@if($advertisement->status == 1)
                                            Active
                                        @else
                                            In-active
                                        @endif
                                    </td>
                                    <td>
                                        <form  action="{{ route('advertisement.destroy', $advertisement->id) }}" method="post">
                                            @method('DELETE')
                                            {!! csrf_field() !!}
{{--                                            <a href="{{ route('advertisement.show', $advertisement->id) }}" class="btn btn-sm btn-success"title="View"><i class="fa fa-eye"></i></a>--}}
                                            <a href="{{ route('advertisement.edit', $advertisement->id) }}" class="btn btn-sm btn-info"title="Edit"><i class="fa fa-edit"></i></a>
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
