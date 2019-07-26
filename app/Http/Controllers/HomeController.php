<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Activity;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        return view('home', [
            'user' => $user, //user who's signed it
            'activities' => Activity::where('user_id', Auth::user()->id)->orderby('created_at')->paginate(10),
        ]);
    }

    public function show()
    {
        return view('approval');
    }
}
