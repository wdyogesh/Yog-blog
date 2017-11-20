<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use App\Pofile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile.profile');
    }

    public function AddProfile(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $profile = new Profile;
        $profile->name = $request->input('name');
        $profile->user_id = Auth::user()->id;
        $profile->designation = $request->input('designation');

        $profile->save();
        return redirect('/profile')->with('response','User Created Successfully !!');
    }
}
