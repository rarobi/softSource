<?php

namespace App\Modules\Member\Controllers;

use App\Modules\Member\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class MemberController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['memberList'] = Member::orderBy('id','desc')->get();
        return view("Member::index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Member::create");
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

        $member = new Member();
        $member->name               = $request->input('name');
        $member->gender             = $request->input('gender');
        $member->email              = $request->input('email');
        $member->mobile             = $request->input('mobile');
        $member->linkedin_address   = $request->input('linkedin');
        $member->designation        = $request->input('designation');
        $member->status             = isset($status) ? 1 : 0;

        $prefix = date('Ymd_');
        $photo  = $request->file('image');

        if ($request->file('image')) {
            $mime_type = $photo->getClientMimeType();
            if(!in_array($mime_type,['image/jpeg','image/jpg','image/png'])){
                return redirect('member/create')->with('flash_danger','Member image must be png or jpg or jpeg format!');
            }
            $photoFile = trim(sprintf("%s", uniqid($prefix, true))) .'.'.$photo->getClientOriginalExtension();
            $path = public_path('uploads/member_images');

            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            $photo->move('uploads/member_images/', $photoFile);
            $member->photo = $photoFile;
        }

        $member->save();
        return redirect()->route('member.index')->withFlashSuccess('Member created successfully');
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

        $data['member']    = Member::findOrFail($id);
        return view("Member::edit", $data);
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

        $member = Member::findOrFail($id);
        $member->name               = $request->input('name');
        $member->gender             = $request->input('gender');
        $member->email              = $request->input('email');
        $member->mobile             = $request->input('mobile');
        $member->linkedin_address   = $request->input('linkedin');
        $member->designation        = $request->input('designation');
        $member->status             = isset($status) ? 1 : 0;

        $prefix = date('Ymd_');
        $photo  = $request->file('image');

        if ($request->file('image')) {
            $mime_type = $photo->getClientMimeType();
            if(!in_array($mime_type,['image/jpeg','image/jpg','image/png'])){
                return redirect('member/create')->with('flash_danger','Member image must be png or jpg or jpeg format!');
            }
            $photoFile = trim(sprintf("%s", uniqid($prefix, true))) .'.'.$photo->getClientOriginalExtension();
            $path = public_path('uploads/member_images');

            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            $photo->move('uploads/member_images/', $photoFile);
            $member->photo = $photoFile;
        }

        $member->save();
        return redirect()->route('member.index')->withFlashSuccess('Member updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        return redirect()->route('member.index')->with('flash_success','Member deleted successfully !');
    }
}
