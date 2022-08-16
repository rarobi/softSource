<?php

namespace App\Modules\Category\Controllers\Backend;

use App\Modules\Category\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['totalCategory'] = Category::orderBy('id','desc')->get();

        return view("Category::backend.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Category::backend.create");
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

       $category = new Category();
        $category->name     = $request->input('name');
        $category->slug     = $request->input('name');
        $category->position = $request->input('position');
        $category->status   = isset($status) ? 1 : 0;
        $category->save();

        return redirect()->route('category.index')->with('flash_success','Category created successfully !');

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
        $data['category'] = Category::findOrFail($id);
        return view("Category::backend.edit", $data);
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

        $category = Category::findOrFail($id);
        $category->name     = $request->input('name');
        $category->slug     = $request->input('name');
        $category->position = $request->input('position');
        $category->status   = isset($status) ? 1 : 0;
        $category->save();

        return redirect()->route('category.index')->with('flash_success','Category updated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')->with('flash_success','Category delete successfully !');
    }
}
