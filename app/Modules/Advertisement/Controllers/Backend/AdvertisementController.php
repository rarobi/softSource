<?php

namespace App\Modules\Advertisement\Controllers\Backend;

use App\Modules\Advertisement\Models\Advertisement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AdvertisementController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['advertisementList'] = Advertisement::orderBy('id','desc')->get();
        return view("Advertisement::backend.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['sizeList'] = ['300X600' => '300X600', '300X250' => '300X250', '728X90' => '728X90', '970X90' => '970X90'];
        return view("Advertisement::backend.create", $data);
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

        $advertise = new Advertisement();
        $advertise->advertise_type     = $request->input('type');
        $advertise->advertise_size     = $request->input('size');
        $advertise->advertise_title    = $request->input('title');
        $advertise->advertise_link     = $request->input('link');
        $advertise->advertise_code     = $request->input('advertisement_code');
        $advertise->status             = isset($status) ? 1 : 0;

        $prefix = date('Ymd_');
        $photo  = $request->file('advertisement_image');

        if ($request->file('advertisement_image')) {
            $mime_type = $photo->getClientMimeType();
            if(!in_array($mime_type,['image/jpeg','image/jpg','image/png'])){
                return redirect('advertisement/create')->with('flash_danger','advertisement image must be png or jpg or jpeg format!');
            }
            $photoFile = trim(sprintf("%s", uniqid($prefix, true))) .'.'.$photo->getClientOriginalExtension();
            $path = public_path('uploads/advertisement_images');
            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            $photo->move('uploads/advertisement_images/', $photoFile);
            $advertise->advertise_image = $photoFile;
        }

        $advertise->save();

        return redirect()->route('advertisement.index')->withFlashSuccess('Advertisement created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['advertisement'] = Advertisement::findOrFail($id);
        $data['sizeList']      = ['300X600' => '300X600', '300X250' => '300X250', '728X90' => '728X90', '970X90' => '970X90'];
        return view("Advertisement::backend.edit", $data);
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

        $advertise = Advertisement::findOrFail($id);
        $advertise->advertise_type     = $request->input('type');
        $advertise->advertise_size     = $request->input('size');
        $advertise->advertise_title    = $request->input('title');
        $advertise->advertise_link     = $request->input('link');
        $advertise->advertise_code     = $request->input('advertisement_code');
        $advertise->status             = isset($status) ? 1 : 0;

        $prefix = date('Ymd_');
        $photo  = $request->file('advertisement_image');

        if ($request->file('advertisement_image')) {
            $mime_type = $photo->getClientMimeType();
            if(!in_array($mime_type,['image/jpeg','image/jpg','image/png'])){
                return redirect('advertisement/create')->with('flash_danger','advertisement image must be png or jpg or jpeg format!');
            }
            $photoFile = trim(sprintf("%s", uniqid($prefix, true))) .'.'.$photo->getClientOriginalExtension();
            $path = public_path('uploads/advertisement_images');
            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            $photo->move('uploads/advertisement_images/', $photoFile);
            $advertise->advertise_image = $photoFile;
        }

        $advertise->save();

        return redirect()->route('advertisement.index')->withFlashSuccess('Advertisement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advertise = Advertisement::findOrFail($id);
        $advertise->delete();

        return redirect()->route('advertisement.index')->with('flash_success','Advertisement deleted successfully !');
    }
}
