<?php

namespace App\Modules\Portfolio\Controllers;

use App\Modules\Category\Models\Category;
use App\Modules\Portfolio\Models\Portfolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['portfolioList'] = Portfolio::orderBy('id','desc')->get();
        return view("Portfolio::index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categoryList'] = Category::pluck('name', 'id');
        return view("Portfolio::create", $data);
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

        $portfolio = new Portfolio();
        $portfolio->title               = $request->input('title');
        $portfolio->category_id         = $request->input('category_id');
        $portfolio->status              = isset($status) ? 1 : 0;

        $prefix = date('Ymd_');
        $photo  = $request->file('featured_image');

        if ($request->file('featured_image')) {
            $mime_type = $photo->getClientMimeType();
            if(!in_array($mime_type,['image/jpeg','image/jpg','image/png'])){
                return redirect('portfolio/create')->with('flash_danger','portfolio image must be png or jpg or jpeg format!');
            }
            $photoFile = trim(sprintf("%s", uniqid($prefix, true))) .'.'.$photo->getClientOriginalExtension();
            $path = public_path('uploads/portfolio_images');

            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            $photo->move('uploads/portfolio_images/', $photoFile);
            $portfolio->photo = $photoFile;
        }

        $portfolio->save();
        return redirect()->route('portfolio.index')->withFlashSuccess('Portfolio created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['portfolio'] = Portfolio::findOrFail($id);
        return view("Portfolio::show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['portfolio']    = Portfolio::findOrFail($id);
        $data['categoryList'] = Category::pluck('name', 'id');
        return view("Portfolio::edit", $data);
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

        $portfolio = Portfolio::findOrFail($id);
        $portfolio->title               = $request->input('title');
        $portfolio->category_id         = $request->input('category_id');
        $portfolio->status              = isset($status) ? 1 : 0;

        $prefix = date('Ymd_');
        $photo  = $request->file('featured_image');

        if ($request->file('featured_image')) {
            $mime_type = $photo->getClientMimeType();
            if(!in_array($mime_type,['image/jpeg','image/jpg','image/png'])){
                return redirect('portfolio/create')->with('flash_danger','portfolio image must be png or jpg or jpeg format!');
            }
            $photoFile = trim(sprintf("%s", uniqid($prefix, true))) .'.'.$photo->getClientOriginalExtension();
            $path = public_path('uploads/portfolio_images');

            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            $photo->move('uploads/portfolio_images/', $photoFile);
            $portfolio->photo = $photoFile;
        }

        $portfolio->save();
        return redirect()->route('portfolio.index')->withFlashSuccess('Portfolio updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ortfolio = Portfolio::findOrFail($id);
        $ortfolio->delete();

        return redirect()->route('portfolio.index')->with('flash_success','Portfolio deleted successfully !');
    }
}
