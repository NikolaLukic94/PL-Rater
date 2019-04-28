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
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
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
