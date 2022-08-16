@extends('backend.layouts.app')
@section('content')

    {!! Form::open(['method' => 'PATCH', 'route' => ["video.update", $video->id], 'class' => 'form claim-form', 'files' => true]) !!}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">Video <small class="text-muted">Edit</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Title</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('title', $video->video_title, ['class' => 'form-control', 'placeholder' => 'Enter Title']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Embeded Code</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::textarea('embeded_code', $video->video, ['class' => 'form-control', 'rows' => 2, 'cols' => 40, 'placeholder' => 'Enter Embeded Code[Example: UOPwiG6yezU]']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>News Details</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::textarea('details', $video->details , ['id' => 'editor1','class' => 'form-control', 'rows' => 3, 'placeholder' => 'Write a description...','required'=>'required','data-error' => 'Please Write Details in English For Article']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Is Active</label>
                        </div>
                        <div class="col-md-9">
                            <input type="checkbox" id="panel" name="status" value="1" @if(isset($video) && ($video->status == 1)) checked @endif> &nbsp;&nbsp;
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

