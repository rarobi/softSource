@extends('backend.layouts.app')
@section('content')

    {!! Form::open(['route' => ["category.store"], 'class' => 'form claim-form', 'files' => true]) !!}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">Category <small class="text-muted">Create</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Category Name</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Category Name', 'required'=>'required','data-error' => 'Please Enter Category Name']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Position</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('position', old('position'), ['class' => 'form-control', 'placeholder' => 'Position', 'required'=>'required','data-error' => 'Please Enter Position']) !!}

                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Is Active</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::checkbox('status', old('status'), ['class' => 'form-control', 'placeholder' => 'Doctor Name', 'required'=>'required','data-error' => 'Please Enter Doctor Name']) !!}
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
                    {!! Form::button("<i class='fa fa-plus'></i> Create", ['class' => 'btn btn-primary', 'type'=>'submit']) !!}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
    {!! Form::close() !!}
@endsection

@section('footer-script')
    <script type="text/javascript">

    </script>

@endsection

