<?php

namespace App\Modules\Videos\Controllers\Backend;

use App\Modules\Videos\Models\Videos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['videoList'] = Videos::orderBy('id','desc')->get();
        return view("Videos::backend.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Videos::backend.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = $request->input('status');

        $video = new Videos();
        $video->video_title = $request->input('title');
        $video->video       = $request->input('embeded_code');
        $video->details     = $request->input('details');
        $video->status      = isset($status) ? 1 : 0;
        $video->save();

        return redirect()->route('video.index')->withFlashSuccess('Video created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['video'] = Videos::findOrFail($id);
        return view("Videos::backend.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['video']  = Videos::findOrFail($id);
        return view("Videos::backend.edit", $data);
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
        $status = $request->input('status');

        $video = Videos::findOrFail($id);
        $video->video_title = $request->input('title');
        $video->video       = $request->input('embeded_code');
        $video->details     = $request->input('details');
        $video->status      = isset($status) ? 1 : 0;
        $video->save();

        return redirect()->route('video.index')->withFlashSuccess('Video updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Videos::findOrFail($id);
        $video->delete();

        return redirect()->route('video.index')->with('flash_success','Video deleted successfully !');
    }
}
