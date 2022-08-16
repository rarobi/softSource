<?php

namespace App\Modules\News\Controllers\Frontend;

use App\Modules\Blog\Models\Blog;
use App\Modules\Contact\Models\Contact;
use App\Modules\Member\Models\Member;
use App\Modules\News\Models\About;
use App\Modules\Portfolio\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['portfolios'] = Portfolio::orderBy('id','desc')->limit(10)->get();
        $data['blogs']      = Blog::orderBy('id','desc')->limit(3)->get();

        return view("News::frontend.index", $data);
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

    public function about()
    {
        return view("News::frontend.about");
    }

    public function portfolio()
    {
        $data['portfolios'] = Portfolio::orderBy('id','desc')->get();
        return view("News::frontend.portfolio", $data);
    }

    public function blogDetails($id)
    {
        $data['blog']      = Blog::findOrFail($id);
        return view("News::frontend.blog_details", $data);
    }

    public function blog()
    {
        $data['blogs']      = Blog::orderBy('id','desc')->get();
        return view("News::frontend.blog", $data);
    }


    public function service()
    {
        return view("News::frontend.service");
    }

    public function team()
    {
        $data['members'] = Member::orderBy('id','desc')->get();
        return view("News::frontend.team", $data);
    }

    public function contact()
    {
        return view("News::frontend.contact");
    }

    public function contactStore(Request $request)
    {
        $contact = new Contact();
        $contact->name    = $request->input('name');
        $contact->email   = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect()->back()->withFlashSuccess('Contact info sent successfully');
    }
}
