@extends('backend.layouts.app')
@section('content')

    {!! Form::open(['method' => 'PATCH', 'route' => ["settings.socials.update", $social->id ], 'class' => 'form claim-form', 'files' => true]) !!}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">Social <small class="text-muted">Edit</small>
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
                            {!! Form::text('name', $social->name, ['class' => 'form-control', 'placeholder' => 'Enter Name', 'required'=>'required']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Icon Code</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('icon', $social->icon_code, ['class' => 'form-control', 'placeholder' => 'Enter icon code[Example: fa fa-facebook]', 'required'=>'required']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Link</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('link', $social->link, ['class' => 'form-control', 'placeholder' => 'Enter Link', 'required'=>'required']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Is Active</label>
                        </div>
                        <div class="col-md-9">
                            <input type="checkbox" id="panel" name="status" value="1" @if(isset($social) && ($social->status == 1)) checked @endif> &nbsp;&nbsp;
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

