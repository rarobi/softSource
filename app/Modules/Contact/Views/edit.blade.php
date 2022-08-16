@extends('backend.layouts.app')
@section('content')

    {!! Form::open(['method' => 'PATCH', 'route' => ["contact-details.update", $contactInfo->id], 'class' => 'form claim-form', 'files' => true]) !!}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">Contact Info <small class="text-muted">Edit</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Email</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('email', $contactInfo->email, ['class' => 'form-control', 'placeholder' => 'Enter email', 'required'=>'required']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Phone</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('phone', $contactInfo->phone, ['class' => 'form-control', 'placeholder' => 'Enter phone', 'required'=>'required']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Address</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('address', $contactInfo->address, ['class' => 'form-control', 'placeholder' => 'Enter address', 'required'=>'required']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Office Schedule</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('schedule', $contactInfo->office_hour, ['class' => 'form-control', 'placeholder' => 'Ex: Monday - Friday - 9am to 5pm', 'required'=>'required']) !!}
                        </div><!--col-->
                    </div>

                </div><!--form-group-->
            </div><!--col-->
            </div><!--row-->
            <hr>
            <div class="row mb-5">
                <div class="col ml-5">
                    <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-reply"></i> Cancel</button>
                </div><!--col-->

                <div class="col text-right mr-5">
                    {!! Form::button("<i class='fa fa-plus'></i> Update", ['class' => 'btn btn-primary', 'type'=>'submit']) !!}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
    {!! Form::close() !!}
@endsection

@section('footer-script')
    <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace( 'details' );
    </script>

@endsection

