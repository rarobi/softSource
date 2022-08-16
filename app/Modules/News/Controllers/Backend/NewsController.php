<?php

namespace App\Modules\News\Controllers\Backend;

use App\Modules\Category\Models\Category;
use App\Modules\News\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['newsList'] = News::orderBy('id','desc')->get();
        return view("News::backend.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categoryList'] = Category::pluck('name', 'id');
        return view("News::backend.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status         = $request->input('status');
        $breaking_news  = $request->input('breaking_news');
        $latest_news    = $request->input('latest_news');
        $home_slider    = $request->input('home_slider');
        $schedule_image = $request->input('schedule_image');

        $news = new News();
        $news->title               = $request->input('title');
        $news->category_id         = $request->input('category_id');
        $news->content             = $request->input('details');
        $news->tags                = $request->input('tags');
        $news->status              = isset($status) ? 1 : 0;
        $news->is_breaking_news    = isset($breaking_news) ? 1 : 0;
        $news->is_latest_news      = isset($latest_news) ? 1 : 0;
        $news->is_home_slider_news = isset($home_slider) ? 1 : 0;
        $news->is_schedule_news    = isset($schedule_image) ? 1 : 0;

        $prefix = date('Ymd_');
        $photo  = $request->file('featured_image');

        if ($request->file('featured_image')) {
            $mime_type = $photo->getClientMimeType();
            if(!in_array($mime_type,['image/jpeg','image/jpg','image/png'])){
                return redirect('news/create')->with('flash_danger','news image must be png or jpg or jpeg format!');
            }
            $photoFile = trim(sprintf("%s", uniqid($prefix, true))) .'.'.$photo->getClientOriginalExtension();
            $path = public_path('uploads/featured_images');
            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            $photo->move('uploads/featured_images/', $photoFile);
            $news->featured_image = $photoFile;
        }

        $news->save();
        return redirect()->route('news.index')->withFlashSuccess('News created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['news'] = News::findOrFail($id);
        return view("News::backend.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['news']         = News::findOrFail($id);
        $data['categoryList'] = Category::pluck('name', 'id');
        return view("News::backend.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $status         = $request->input('status');
        $breaking_news  = $request->input('breaking_news');
        $latest_news    = $request->input('latest_news');
        $home_slider    = $request->input('home_slider');
        $schedule_image = $request->input('schedule_image');

        $news = News::findOrFail($id);
        $news->title               = $request->input('title');
        $news->category_id         = $request->input('category_id');
        $news->content             = $request->input('details');
        $news->tags                = $request->input('tags');
        $news->status              = isset($status) ? 1 : 0;
        $news->is_breaking_news    = isset($breaking_news) ? 1 : 0;
        $news->is_latest_news      = isset($latest_news) ? 1 : 0;
        $news->is_home_slider_news = isset($home_slider) ? 1 : 0;
        $news->is_schedule_news    = isset($schedule_image) ? 1 : 0;

        $prefix = date('Ymd_');
        $photo  = $request->file('featured_image');

        if ($request->file('featured_image')) {
            $mime_type = $photo->getClientMimeType();
            if(!in_array($mime_type,['image/jpeg','image/jpg','image/png'])){
                return redirect('news/create')->with('flash_danger','news image must be png or jpg or jpeg format!');
            }
            $photoFile = trim(sprintf("%s", uniqid($prefix, true))) .'.'.$photo->getClientOriginalExtension();
            $path = public_path('uploads/featured_images');
            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            $photo->move('uploads/featured_images/', $photoFile);
            $news->featured_image = $photoFile;
        }

        $news->save();
        return redirect()->route('news.index')->withFlashSuccess('News updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')->with('flash_success','News deleted successfully !');
    }
}
