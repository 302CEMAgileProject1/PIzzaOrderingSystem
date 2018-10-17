<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user.profiles.index');
    }

    public function store()
    {
        // Validate the form for server side
        $this->validate(request(), [
            'user_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'company' => 'required',
            'street' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'state' => 'required',
            'country' => 'required',
            'phone' => 'required'
        ]);

        // Store the form into database
        Profile::create([
            'user_id' => request('user_id'),
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'company' => request('company'),
            'street' => request('street'),
            'city' => request('city'),
            'zip_code' => request('zip_code'),
            'state' => request('state'),
            'country' => request('country'),
            'phone' => request('phone')
        ]);

        return redirect('/');
    }

    public function update(Request $request)
    {
        $this->validate(request(), [
            'first_name' => 'required',
            'last_name' => 'required',
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

        return redirect('/profile');
    }
}
