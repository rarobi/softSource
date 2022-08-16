<?php

namespace App\Modules\Settings\Controllers\Backend;

use App\Libraries\Encryption;
use App\Models\Auth\User;
use App\Modules\Settings\Models\AboutUs;
use App\Modules\Settings\Models\Photo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{

    /**
     * Delete Photo
     */
    public function deletePhoto($photoId)
    {
        $decodedPhotoId = Encryption::decodeId($photoId);
        $photo = Photo::find($decodedPhotoId);
        $photo->is_archive = 1;
        $photo->status = 0;
        $photo->save();
        session()->put('flash_success', 'Photo deleted successfully!');
    }

    public function index() {
        $data['about_us'] = AboutUs::orderBy('id','desc')->first();
        return view("Settings::backend.index", $data);
    }

    public function store(Request $request)
    {
        $type = $request->input('type');

        if($type == 'about') {
            $about = new AboutUs();
            $about->details = $request->input('about_us');
            $about->save();

            return redirect()->route('settings.general.index')->withFlashSuccess('About Us created successfully');
        } else {
            //Add code for change password

            $current_password = $request->input('current_password');
            $new_password     = $request->input('new_password');
            $confirm_password = $request->input('confirm_password');

            $user = auth()->user();

            if( !$user) {
                return redirect()->route('settings.general.index')->withFlashDanger("We can't find a user");
            }

            if(!Hash::check($current_password, $user->password)) {
                return redirect()->route('settings.general.index')->withFlashDanger('Current password does not match with provided password');
            }

            if( $new_password != $confirm_password) {
                return redirect()->route('settings.general.index')->withFlashDanger('New password does not match with confirm password');
            }

            $user->password = bcrypt($new_password);
            $user->save();

            return redirect()->route('settings.general.index')->withFlashSuccess('Password changed successfully');
        }

    }

    public function update(Request $request, $id)
    {

        $about = AboutUs::find($id);

        $about->details = $request->input('about_us');
        $about->save();

        return redirect()->route('settings.general.index')->withFlashSuccess('About Us updated successfully');

    }
}
