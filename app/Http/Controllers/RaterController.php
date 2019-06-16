<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Rate;
use App\Rater;
use App\Premium;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/* USED FOR GENERATING RATING WORKSHEETS AND CALCULATING PREMIUM */
class RaterController extends Controller
{
	/* CHECK FOR ACCUARACY OF INFO AND IF NEEDED AMEND LIMITS/COVERAGES */
    public function index($id) {

    	return view('/rater/prepare',[
    		'file' => File::findOrFail($id),
            'lob' => $this->lob
    	]);
    }


    /* ENTERS RW COEFICIENTS IN DB */
    /* SHOW LIMITS AND COEFICIENTS THAT WILL BE APPLIED WITH LIMITS GIVEN */
    public function create($id, Request $request) {

    /* FILE WE ARE CURRENTLY RATING */
        $file = File::findOrFail($id);
        // finding rates that should be applied, since different rates will apply to different lob
        $rate = Rate::where('lob', $file->lob)->first();

        if ($rate == null) {
            return view('/rater/rates_not_found'); 
        } 
            else 
        {
            $rater = Rater::createNewWithCalculatedCoeficients($id, $request);

            return view('/rater/rw_preview',[
                'file' => $file,
                'rater' => $rater
            ]);
        }
    }


    /* CREATE/STORE RATING WORKESHEET */
    public function store($file_id, $rater_id) {

        $file = File::findOrFail($file_id); 

        $calculation = Rater::createPremiumValues($file_id, $rater_id);

        $rater = Rater::findOrFail($rater_id)->first();

    	return redirect('/rating-worksheet/store/'. $file->id . '/' . $rater->id);
    }

}
