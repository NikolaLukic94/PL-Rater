<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Submission;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/* USED FOR GENERATING RATING WORKSHEETS AND CALCULATING PREMIUM */

class RaterController extends Controller
{
	/* CHECK FOR ACCUARACY OF INFO AND IF NEEDED AMEND LIMITS/COVERAGES */
    public function prepareRw($id) {

        $file = File::findOrFail($id); 

    	return view('/rater/prepare',[
    		'file' => $file
    	]);
    }

    /* SHOW LIMITS AND COEFICIENTS THAT WILL BE APPLIED WITH LIMITS GIVEN */
    public function previewRateCoeficientsAndCalculate($id) {

        $file = File::findOrFail($id); 

        $rateApplied = DB::table('rates')->where('lob',$file->lob)->get();

    	return view('/rater/prepare',[
    		'file' => $file
    	]);
    }

    /* CREATE RATING WORKESHEET, SAVE IT TO PDF, SEND PDF TO AGENT AND ATTACH IN FILE/ATTACHMENTS  */
    public function generateRw($id) {

        $file = File::findOrFail($id); 

    	return view('/rater/rw');
    }

    public function update() {


    }


}
