<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Submission;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function index() {
        /* Getting all subs results */
    	$subs = DB::table('submissions')->get();
    	/* COUNTING # OF SUBS PER AGENCY */
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
    	/* end */
        /* COUNTING # OF SUBS PER LOB */
        $allLobs = [];
        $nullAgency = [];

        foreach($subs as $sub) {
            array_push($allLobs, $sub->lob);
        }
        $countPerLob = [];

        foreach($allLobs as $key => $value) {
            if(empty($countPerLob[$value])) {
                $countPerLob[$value] = 1;
            }
            else {
                $countPerLob[$value] ++; 
            }
        }
        /* end */
        /* COUNTING # OF SUBS PER STATE */
        $allStates = [];
        $nullAgency = [];

        foreach($subs as $sub) {
            array_push($allStates, $sub->location_address_state);
        }
        $countPerState = [];

        foreach($allStates as $key => $value) {
            if(empty($countPerState[$value])) {
                $countPerState[$value] = 1;
            }
            else {
                $countPerState[$value] ++; 
            }
        }
        /* end */
        /* COUNTING # OF SUBS PER TYPE OF COVERAGE */
        $allConstructionTypes = [];
        $nullAgency = [];

        foreach($subs as $sub) {
            array_push($allConstructionTypes, $sub->construction_type);
        }
        $countPerConstructionType = [];

        foreach($allConstructionTypes as $key => $value) {
            if(empty($countPerConstructionType[$value])) {
                $countPerConstructionType[$value] = 1;
            }
            else {
                $countPerConstructionType[$value] ++; 
            }
        }    
        /* END */    
        /* COUNTING # OF SUBS PER TYPE OF COVERAGE */
        $allProtectionClasses = [];
        $nullAgency = [];

        foreach($subs as $sub) {
            array_push($allProtectionClasses, $sub->protection_class);
        }
        $countPerProtectionClasses = [];

        foreach($allProtectionClasses as $key => $value) {
            if(empty($countPerProtectionClasses[$value])) {
                $countPerProtectionClasses[$value] = 1;
            }
            else {
                $countPerProtectionClasses[$value] ++; 
            }
        }    
        /* END */           
	    return view('/stats/subs', [
	            'countPerAgency' => $countPerAgency,
                'countPerLob' => $countPerLob,
                'countPerState' => $countPerState,
                'countPerConstructionType' => $countPerConstructionType,
                'countPerProtectionClasses' => $countPerProtectionClasses
	        ]);    		
    }

    public function thisWeekStats(Request $request) {

        $en = Carbon::now();
        $weekStartDate = $en->startOfWeek()->format('Y-m-d H:i');
        $weekEndDate = $en->endOfWeek()->format('Y-m-d H:i');
        
        //logic goes here
        //admin should be able to select time period for which he would like go get stats
        //if non selected, the current week stats are displayed


        return view('/status/subs/this_week', [
                'countPerAgency' => $countPerAgency,
                'countPerLob' => $countPerLob,
                'countPerState' => $countPerState,
                'countPerConstructionType' => $countPerConstructionType,
                'countPerProtectionClasses' => $countPerProtectionClasses
            ]);

    }
}
