<?php

namespace App\Modules\Settings\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Modules\Settings\Models\Social;
use Illuminate\Http\Request;

class SocialSettingsController extends Controller
{
    public function index() {
        $data['socialList'] = Social::orderBy('id','desc')->get();
        return view("Settings::backend.social.index", $data);
    }

    public function create() {
        return view("Settings::backend.social.create");
    }

    public function store(Request $request)
    {
        $status = $request->input('status');

        $social = new Social();
        $social->name         = $request->input('name');
        $social->icon_code    = $request->input('icon');
        $social->link         = $request->input('link');
        $social->status       = isset($status) ? 1 : 0;
        $social->save();

        return redirect()->route('settings.socials.index')->withFlashSuccess('Social created successfully');
    }

    public function edit($id)
    {
        $data['social'] = Social::findOrFail($id);
        return view("Settings::backend.social.edit", $data);
    }

    public function update(Request $request, $id)
    {
        $status = $request->input('status');

        $social = Social::findOrFail($id);
        $social->name         = $request->input('name');
        $social->icon_code    = $request->input('icon');
        $social->link         = $request->input('link');
        $social->status       = isset($status) ? 1 : 0;
        $social->save();

        return redirect()->route('settings.socials.index')->withFlashSuccess('Social updated successfully');
    }

    public function destroy($id)
    {
        $social = Social::findOrFail($id);
        $social->delete();

        return redirect()->route('settings.socials.index')->with('flash_success','Social deleted successfully !');
    }
}
