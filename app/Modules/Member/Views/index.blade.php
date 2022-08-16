@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Member List
                    </h4>
                </div><!--col-->

                <div class="col-sm-7">
                    <div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">
                        <a href="{!! route('member.create') !!}" class="btn btn-info ml-1" data-toggle="tooltip" title="@lang('labels.general.create_new')"><i class="fas fa-plus-circle"></i></a>
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
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Designation</th>
                                <th>Photo</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($memberList as $member)
                                <tr>
                                    <td>{{ $member->id }}</td>
                                    <td>{{ isset($member->name) ? $member->name : 'N/A' }}</td>
                                    <td>{{ isset($member->gender) ? $member->gender : 'N/A' }}</td>
                                    <td>{{ isset($member->email) ? $member->email : 'N/A' }}</td>
                                    <td>{{ isset($member->mobile) ? $member->mobile : 'N/A' }}</td>
                                    <td>{{ isset($member->Designation) ? $member->Designation : 'N/A' }}</td>
                                    <td>@if($member->photo)
                                            <img src="/uploads/member_images/{{ $member->photo }}" height="50" width="100">
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>@if($member->status == 1)
                                            Active
                                        @else
                                            In-active
                                        @endif
                                    </td>
                                    <td>
                                        <form  action="{{ route('member.destroy', $member->id) }}" method="post">
                                            @method('DELETE')
                                            {!! csrf_field() !!}
{{--                                            <a href="{{ route('member.show', $member->id) }}" class="btn btn-sm btn-success"title="View"><i class="fa fa-eye"></i></a>--}}
                                            <a href="{{ route('member.edit', $member->id) }}" class="btn btn-sm btn-info"title="Edit"><i class="fa fa-edit"></i></a>
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
