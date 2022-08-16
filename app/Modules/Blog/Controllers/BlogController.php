<?php

namespace App\Modules\Blog\Controllers;

use App\Modules\Blog\Models\Blog;
use App\Modules\Category\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blogList'] = Blog::orderBy('id','desc')->get();
        return view("Blog::index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categoryList'] = Category::pluck('name', 'id');
        return view("Blog::create", $data);
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

        $blog = new Blog();
        $blog->title               = $request->input('title');
//        $blog->category_id         = $request->input('category_id');
        $blog->content             = $request->input('details');
        $blog->tags                = $request->input('tags');
        $blog->status              = isset($status) ? 1 : 0;
        $blog->created_by          = Auth::user()->id;

        $prefix = date('Ymd_');
        $photo  = $request->file('featured_image');

        if ($request->file('featured_image')) {
            $mime_type = $photo->getClientMimeType();
            if(!in_array($mime_type,['image/jpeg','image/jpg','image/png'])){
                return redirect('blog/create')->with('flash_danger','blog image must be png or jpg or jpeg format!');
            }
            $photoFile = trim(sprintf("%s", uniqid($prefix, true))) .'.'.$photo->getClientOriginalExtension();
            $path = public_path('uploads/blog_images');

            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            $photo->move('uploads/blog_images/', $photoFile);
            $blog->featured_image = $photoFile;
        }

        $blog->save();
        return redirect()->route('blog.index')->withFlashSuccess('Blog created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['blog'] = Blog::findOrFail($id);
        return view("Blog::show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['blog']         = Blog::findOrFail($id);

        return view("Blog::edit", $data);
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

        $blog = Blog::findOrFail($id);
        $blog->title               = $request->input('title');
//        $blog->category_id         = $request->input('category_id');
        $blog->content             = $request->input('details');
        $blog->tags                = $request->input('tags');
        $blog->status              = isset($status) ? 1 : 0;
        $blog->created_by          = Auth::user()->id;

        $prefix = date('Ymd_');
        $photo  = $request->file('featured_image');

        if ($request->file('featured_image')) {
            $mime_type = $photo->getClientMimeType();
            if(!in_array($mime_type,['image/jpeg','image/jpg','image/png'])){
                return redirect('blog/create')->with('flash_danger','blog image must be png or jpg or jpeg format!');
            }
            $photoFile = trim(sprintf("%s", uniqid($prefix, true))) .'.'.$photo->getClientOriginalExtension();
            $path = public_path('uploads/blog_images');

            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            $photo->move('uploads/blog_images/', $photoFile);
            $blog->featured_image = $photoFile;
        }

        $blog->save();
        return redirect()->route('blog.index')->withFlashSuccess('Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blog.index')->with('flash_success','Blog deleted successfully !');
    }
}
