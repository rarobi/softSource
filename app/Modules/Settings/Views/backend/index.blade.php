@extends('backend.layouts.app')
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">General  <small class="text-muted">Settings</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->
            <hr>
            <div class="tabs_styled_2">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-expanded="true">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="book-tab" data-toggle="tab" href="#about" role="tab" aria-controls="book">About Us</a>
                    </li>
                </ul>
                <!--/nav-tabs -->
                <div class="tab-content">
                    <!-- /tab_1 -->
                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                        {!! Form::open(['route' => ["settings.general.store"], 'class' => 'form claim-form', 'files' => true]) !!}
                        <div class="indent_title_in1">
                            <i class="pe-7s-user"></i>
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="row form-group">
                                        <div class="col-md-2">
                                            <label>Current Password</label>
                                        </div>
                                        <div class="col-md-10">
                                            {!! Form::text('current_password', old('current_password'), ['class' => 'form-control', 'placeholder' => 'Enter current password']) !!}
                                        </div><!--col-->
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-2">
                                            <label>New Password</label>
                                        </div>
                                        <div class="col-md-10">
                                            {!! Form::text('new_password', old('new_password'), ['class' => 'form-control', 'placeholder' => 'Enter new password']) !!}
                                        </div><!--col-->
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-2">
                                            <label>Confirm Password</label>
                                        </div>
                                        <div class="col-md-10">
                                            {!! Form::text('confirm_password', old('confirm_password'), ['class' => 'form-control', 'placeholder' => 'Confirm password']) !!}
                                            <input type="hidden" name="type" value="change_password">
                                        </div><!--col-->
                                    </div>
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
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <!-- /tab_2 -->
                    <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="book-tab">

                        @if(is_null($about_us))
                        {!! Form::open(['route' => ["settings.general.store"], 'class' => 'form claim-form', 'files' => true]) !!}
                        @else
                        {!! Form::open(['method' => 'PATCH', 'route' => ["settings.general.update",  $about_us->id], 'class' => 'form claim-form', 'files' => true]) !!}
                        @endif
                        <div class="indent_title_in1">
                            <i class="pe-7s-user"></i>
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="row form-group">
                                        <div class="col-md-2">
                                            <label>About Us Text</label>
                                        </div>
                                        <div class="col-md-10">
                                            {!! Form::textarea('about_us', isset($about_us) ? $about_us->details : null, ['class' => 'form-control', 'rows' => 2, 'cols' => 40, 'placeholder' => 'Enter Advertisement Code']) !!}
                                            <input type="hidden" name="type" value="about">
                                        </div><!--col-->
                                    </div>
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
                        </div>
                        {!! Form::close() !!}
                    </div>
                    </div>

               </div>
                <!-- /tab-content -->
            </div>

        </div><!--card-body-->
    </div><!--card-->
@endsection

@section('footer-script')
    <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace( 'about_us' );
    </script>

@endsection

