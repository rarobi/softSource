<?php

namespace App\Modules\Dashboard\Controllers\Backend;

use App\Modules\Advertisement\Models\Advertisement;
use App\Modules\Category\Models\Category;
use App\Modules\News\Models\News;
use App\Modules\Subscriber\Models\Subscriber;
use App\Modules\User\Models\User;
use App\Modules\Videos\Models\Videos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $startTime = Carbon::now()->startOfDay()->toDateTimeString();
        $endTime   = Carbon::now()->endOfDay()->toDateTimeString();

        $data['totalSubscriber'] = Subscriber::count();
        $data['totalNews']       = News::count();
        $data['todayNews']       = News::whereBetween('created_at',[$startTime, $endTime])->count();
        $data['totalCategory']   = Category::count();
        $data['totalVideo']      = Videos::count();
        $data['totalAdd']        = Advertisement::count();
        return view("Dashboard::backend.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
