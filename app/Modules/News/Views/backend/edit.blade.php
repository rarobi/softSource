@extends('backend.layouts.app')
@section('content')

    {!! Form::open(['method' => 'PATCH', 'route' => ["news.update", $news->id], 'class' => 'form claim-form', 'files' => true]) !!}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">News <small class="text-muted">Edit</small>
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
                            {!! Form::text('title', $news->title, ['class' => 'form-control', 'placeholder' => 'Enter Title', 'required'=>'required']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Category</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::select('category_id', $categoryList, null, ['class' => 'form-control', 'placeholder' => 'Position', 'required'=>'required']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Featured Image</label>
                        </div>
                        <div class="col-md-9">
                            <input type="file" name="featured_image" class="file thumbnail-file1" accept="image/*">
                            @if($news->featured_image)
                                <img src="/uploads/featured_images/{{ $news->featured_image }}" height="50" width="100">
                            @endif
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>News Details</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::textarea('details', $news->content , ['id' => 'editor1','class' => 'form-control', 'rows' => 3, 'placeholder' => 'Write a description...','required'=>'required','data-error' => 'Please Write Details in English For Article']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>tag</label>
                        </div>
                        <div class="col-md-9">
                            {!! Form::text('tags', $news->tags, ['class' => 'form-control', 'placeholder' => 'Enter Tag Name']) !!}
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Is Active</label>
                        </div>
                        <div class="col-md-9">
                            <input type="checkbox" id="panel" name="status" value="1" @if(isset($news) && ($news->status == 1)) checked @endif> &nbsp;&nbsp;
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Add to Breaking News</label>
                        </div>
                        <div class="col-md-9">
                            <input type="checkbox" id="panel" name="breaking_news" value="1" @if(isset($news) && ($news->is_breaking_news == 1)) checked @endif> &nbsp;&nbsp;
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Add to Latest News</label>
                        </div>
                        <div class="col-md-9">
                            <input type="checkbox" id="panel" name="latest_news" value="1" @if(isset($news) && ($news->is_latest_news == 1)) checked @endif> &nbsp;&nbsp;
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Add to Home Slider</label>
                        </div>
                        <div class="col-md-9">
                            <input type="checkbox" id="panel" name="home_slider" value="1" @if(isset($news) && ($news->is_home_slider_news == 1)) checked @endif> &nbsp;&nbsp;
                        </div><!--col-->
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3">
                            <label>Is schedule This News</label>
                        </div>
                        <div class="col-md-9">
                            <input type="checkbox" id="panel" name="schedule_image" value="1" @if(isset($news) && ($news->is_schedule_news == 1)) checked @endif> &nbsp;&nbsp;
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

