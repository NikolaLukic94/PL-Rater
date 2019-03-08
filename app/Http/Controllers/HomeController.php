<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function index()
    {

       /* $submissions = DB::table('submissions')->where('status','not_logged')->count()->get();
        */
        return view('home');
    } 

    public function test()
    {

       /* $submissions = DB::table('submissions')->where('status','not_logged')->count()->get();
        */
        return view('test');
    } 

}
