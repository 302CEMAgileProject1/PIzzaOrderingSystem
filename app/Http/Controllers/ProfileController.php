<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(User $user)
    {
        return view('user.profiles.show', compact('user'));
    }

    public function update(Request $request)
    {
        $this->validate(request(), [
            'company' => 'required',
            'street' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'state' => 'required',
            'country' => 'required',
            'phone' => 'required',
        ]);

        $profile = \Auth::user()->profile;

        $profile->update($request->all());

        return back()->with('success', 'Profile updated!');
    }
}
