<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Submission;
use App\LogActivity;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index() {
                                                
	    return view('/welcome');
  	}
}
