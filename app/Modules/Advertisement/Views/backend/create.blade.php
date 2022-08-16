@extends('backend.layouts.app')
@section('content')

    {!! Form::open(['route' => ["advertisement.store"], 'class' => 'form claim-form', 'files' => true]) !!}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">Advertisement <small class="text-muted">Create</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->
            <hr>
            <div class="tabs_styled_2">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-expanded="true">General Advertisement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="book-tab" data-toggle="tab" href="#google" role="tab" aria-controls="book">Google Advertisement</a>
                    </li>
                </ul>
                <!--/nav-tabs -->
                <div class="tab-content">
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label>Advertisement Title</label>
                                </div>
                                <div class="col-md-9">
                                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'Enter Title', 'required'=>'required']) !!}
                                </div><!--col-->
                            </div>
                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label>Advertisement Size</label>
                                </div>
                                <div class="col-md-9">
                                    {!! Form::select('size', $sizeList, null, ['class' => 'form-control', 'placeholder' => 'Select a size', 'required'=>'required']) !!}
                                </div><!--col-->
                            </div>
                        </div><!--form-group-->
                    </div><!--col-->
                    <!-- /tab_1 -->
                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <div class="indent_title_in1">
                            <i class="pe-7s-user"></i>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row form-group">
                                        <div class="col-md-3">
                                            <label>Advertisement Link</label>
                                        </div>
                                        <div class="col-md-9">
                                            {!! Form::text('link', old('link'), ['class' => 'form-control', 'placeholder' => 'Enter Advertisement Link']) !!}
                                            <input type="hidden" name="type" value="general">
                                        </div><!--col-->
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-3">
                                            <label>Advertisement Image</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="file" name="advertisement_image" class="file thumbnail-file1" accept="image/*">
                                        </div><!--col-->
                                    </div>

                                </div><!--col-->
                            </div><!--row-->

                        </div>
                    </div>
                    <!-- /tab_2 -->
                    <div class="tab-pane fade" id="google" role="tabpanel" aria-labelledby="book-tab">
                        <div class="indent_title_in1">
                            <i class="pe-7s-user"></i>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row form-group">
                                        <div class="col-md-3">
                                            <label>Advertisement Code</label>
                                        </div>
                                        <div class="col-md-9">
                                            {!! Form::textarea('advertisement_code', old('advertisement_code'), ['class' => 'form-control', 'rows' => 2, 'cols' => 40, 'placeholder' => 'Enter Advertisement Code']) !!}
                                            <input type="hidden" name="type" value="google">
                                        </div><!--col-->
                                    </div>
                                </div><!--col-->
                            </div><!--row-->

                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Is Active</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::checkbox('status', old('status'), ['class' => 'form-control']) !!}
                        </div><!--col-->
                    </div>
                </div>
                <!-- /tab-content -->
            </div>
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
    <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace( 'details' );
    </script>

@endsection

