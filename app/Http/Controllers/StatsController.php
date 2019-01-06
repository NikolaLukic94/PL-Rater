<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Submission;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function index() {

    	$subs = DB::table('submissions')->get();

    	$allAgencies = [];
    	$nullAgency = [];

    	foreach($subs as $sub) {
    		array_push($allAgencies, $sub->agency_name);
    	}
    	$countPerAgency = [];

    	foreach($allAgencies as $key => $value) {
    		if(empty($countPerAgency[$value])) {
    			$countPerAgency[$value] = 1;
    		}
    		else {
    			$countPerAgency[$value] ++; 
    		}
    	}
    	return view('/stats/subs',compact($countPerAgency));
    }
    
}
