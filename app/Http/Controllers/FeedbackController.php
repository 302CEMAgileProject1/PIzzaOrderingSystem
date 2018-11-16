<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('user.feedback.create');
    }

    public function store()
    {
        //validate the form inputs
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'title' => 'required',
            'message' => 'required',
        ]);

        //store into database
        Feedback::create([
            'name' => request('name'),
            'email' => request('email'),
            'title' => request('title'),
            'message' => request('message'),
        ]);

        return back();
    }

}
