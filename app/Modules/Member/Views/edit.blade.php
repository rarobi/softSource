@extends('backend.layouts.app')
@section('content')

    {!! Form::open(['method' => 'PATCH', 'route' => ["member.update", $member->id], 'class' => 'form claim-form', 'files' => true]) !!}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">Member <small class="text-muted">Edit</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Name</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('name', $member->name, ['class' => 'form-control', 'placeholder' => 'Enter Name', 'required'=>'required']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Gender</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::select('gender', ['' => 'Select an option', 'male' => 'Male', 'female' => 'Female'], $member->gender, ['class' => 'form-control', 'placeholder' => 'Gender', 'required'=>'required']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Email</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('email', $member->email, ['class' => 'form-control', 'placeholder' => 'Enter Email', 'required'=>'required']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Mobile</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('mobile', $member->mobile, ['class' => 'form-control', 'placeholder' => 'Enter Mobile', 'required'=>'required']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Linkedin Address</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('linkedin', $member->linkedin_address, ['class' => 'form-control', 'placeholder' => 'Enter Linkedin Address', 'required'=>'required']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Designation</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('designation', $member->designation, ['class' => 'form-control', 'placeholder' => 'Enter Designation', 'required'=>'required']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Image</label>
                        </div>
                        <div class="col-md-9">
                            <input type="file" name="image" class="file thumbnail-file1" accept="image/*">
                        </div><!--col-->
                    </div>

                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Is Active</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::checkbox('status', old('status'), ['class' => 'form-control']) !!}
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

