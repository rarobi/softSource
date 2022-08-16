@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                       Contact Info
                    </h4>
                </div><!--col-->

            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Office Schedule</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contactInfo as $contact)
                                <tr>
                                    <td>{{ isset($contact->email) ? $contact->email : 'N/A' }}</td>
                                    <td> {!! isset($contact->phone) ? $contact->phone : 'N/A' !!}
                                    </td>
                                    <td>{!! isset($contact->address) ? \Illuminate\Support\Str::limit($contact->address, 50, $end='...') : 'N/A' !!}  </td>
                                    <td>{!! isset($contact->office_hour) ? $contact->office_hour : 'N/A' !!}
                                    </td>
                                    <td>
                                        <a href="{{ route('contact-details.edit', $contact->id) }}" class="btn btn-sm btn-info"title="Edit"><i class="fa fa-edit"></i></a>
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
