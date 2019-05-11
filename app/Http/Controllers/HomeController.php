<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\User;
use App\Activity;
use Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        return view('home',[
            'user' => $user, //user who's signed it
            'activities' => Activity::where('user_id', Auth::user()->id)->paginate(10)
        ]);
    } 

    public function show()
    {
        return view('approval');
    }


}
