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
                                                
	    $bgTime = Carbon::now()->format('H:i');
	    $usTime = Carbon::now('US/Central')->format('H:i'); 
	    $montrealTime = Carbon::now('America/Montreal')->format('H:i');   	
        
	    return view('/welcome',[
			'bgTime' => $bgTime,
			'usTime' => $usTime,
			'montrealTime' => $montrealTime,
			'submission' => Submission::where('status', 'email')->count()
		]);

  }

}
