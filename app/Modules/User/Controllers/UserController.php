<?php

namespace App\Modules\User\Controllers;

use App\DataTables\UserListDataTable;
use App\Libraries\Encryption;
use App\Modules\Settings\Models\EmailQueue;
use App\Modules\User\Models\User;
use App\Modules\User\Models\UserType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(UserListDataTable $dataTable)
    {
        return $dataTable->render("User::index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['userTypes'] = UserType::where('is_registrable',1)
            ->where('status',1)
            ->where('is_archive',0)
            ->pluck('type_name','id');
        return view('User::create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'designation' => 'required',
            'company_name' => 'required',
            'country' => 'required',
            'nationality' => 'required',
            'date_of_birth' => 'required',
            'permanent_address' => 'required'
        ]);

        $userPassword = Str::random(10);
        $user = new User();
        $user->user_type = $request->get('user_type');
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->designation = $request->get('designation');
        $user->password = Hash::make($userPassword);
        $user->company_name = $request->get('company_name');
        $user->country = $request->get('country');
        $user->nationality = $request->get('nationality');
        $user->date_of_birth = $request->get('date_of_birth');
        $user->status = 1;
        $user->verification_status = 1;

        $path = 'uploads/profile/';
        if($request->hasFile('photo')){
            $_userPhoto = $request->file('photo');
            $mimeType = $_userPhoto->getClientMimeType();
            if(!in_array($mimeType,['image/jpg', 'image/jpeg', 'image/png']))
                return redirect()->back();
            if(!file_exists($path))
                mkdir($path, 0777, true);

            $userPhoto = trim(sprintf('%s', uniqid('User_', true))) . '.' . $_userPhoto->getClientOriginalExtension();
            Image::make($_userPhoto->getRealPath())->resize(300,300)->save($path . '/' . $userPhoto);
            $user->photo = $userPhoto;
        }

        $user->save();

        /*
         * Email Queue
         */
        $emailData['subject'] = "User registration notification";
        $emailData['content'] = "We would like to inform you that your registration process is completed.<br/>
        <span style='color: #1164f3'>Your account password :<strong><code> $userPassword </code></strong></span><br/>
        This is a secret password generated by the system.<br/>
        But to ensure your own security and convenience, you should change the password after logging in.<br/>
        Please log in to the system and take appropriate steps.<br/><br/>
        If you have any questions you may contact with System Admin.";
        $emailContent = view("email.content",$emailData)->render();
        $emailQueue = new EmailQueue();
        $emailQueue->content = $emailContent;
        $emailQueue->to = $user->email;
        $emailQueue->subject = $emailData['subject'];
        $emailQueue->status = 1;
        $emailQueue->save();

        return redirect(route('users.index'))->with('flash_message','User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($userId)
    {
        $decodedUserId = Encryption::decodeId($userId);
        $data['user'] = User::find($decodedUserId);
        return view("User::edit",$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $userId)
    {
        $this->validate($request, [
            'name'              => 'required',
            'country'           => 'required',
            'nationality'       => 'required',
            'date_of_birth'     => 'required',
            'permanent_address' => 'required'
        ]);

        $decodedUserId = Encryption::decodeId($userId);
        $user = User::find($decodedUserId);
        $user->name = $request->get('name');
        $user->designation = $request->get('designation');
        $user->company_name = $request->get('company_name');
        $user->country = $request->get('country');
        $user->nationality = $request->get('nationality');
        $user->date_of_birth = $request->get('date_of_birth');
        $user->permanent_address = $request->get('permanent_address');

        $path = "uploads/profile/";
        if($request->hasFile('photo')){
            $_userProfile = $request->file('photo');
            $mimeType = $_userProfile->getClientMimeType();
            if(!in_array($mimeType,['image/jpg', 'image/jpeg', 'image/png']))
                return redirect()->back();
            if(!file_exists($path))
                mkdir($path, 0777, true);

            $userProfile = trim(sprintf('%s', uniqid('Profile_', true))) . '.' . $_userProfile->getClientOriginalExtension();
            Image::make($_userProfile->getRealPath())->resize(300,250)->save($path . '/' . $userProfile);
            $user->photo = $userProfile;
        }
        $user->save();
        return redirect(route('users.index'))->with('flash_message','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }

    public function approveUser($userId){
        $decodedId = Encryption::decodeId($userId);
        $user = User::find($decodedId);
        $user->approve_status = 1;
        $user->save();

        return redirect()->back()->with('flash_success', 'User approved!');
    }

    public function activateUser($userId){
        $decodedId = Encryption::decodeId($userId);
        $user = User::find($decodedId);
        $user->activation_status = 1;
        $user->save();

        return redirect()->back()->with('flash_success', 'User activated!');
    }

    public function deactivateUser($userId){
        $decodedId = Encryption::decodeId($userId);
        $user = User::find($decodedId);
        $user->activation_status = 0;
        $user->save();
        session()->put('flash_danger', 'User deactivated!');
    }
}
