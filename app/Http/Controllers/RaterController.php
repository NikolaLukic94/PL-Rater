<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Rate;
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
        /* ENTER RW COEFICIENTS IN DB */
    public function previewRateCoeficientsAndCalculate($id) {

        $lob = null;
        $cov_a  = null;
        $other_structures = null;
        $loss_of_use = null;
        $med_pay = null;
        $aop_ded = null;
        $construction_type = null;
        $protection_class = null;
        $new_purchase = null;
        $email_address = null;
        $prior_carrier = null;
        $prior_carrier_name = null;
        // file we are currently rating
        $file = File::findOrFail($id); 
        // finding rates that should be applied, since different rates will apply to different lob
        $rate = DB::table('rates')->where('lob',$file->lob)->get();
        // getting coeficients that will be used for rating
        $rater = new Rater;

        Rater::create([           

                'general_rate' => $rate->general_rate,
                'cov_a' => $rate->cov_a,
                'other_structures' => $rate->other_structures,
                'loss_of_use' => $rate->loss_of_use,

                if($file->med_pay == '1000') {
                    'med_pay' => $rate->med_pay_1k;
                }  
                elseif  ($file->med_pay == '2500'{ 
                    'med_pay' => $rate->med_pay_2_5k;
                elseif ($file->med_pay == '5000') {
                    'med_pay' => $rate->med_pay_5k; }

                if($file->aop_ded == '1') { 
                    'aop_ded' == $rate->aop_ded_1; }    
                elseif  ($file->aop_ded == '2') { 
                    'aop_ded' => $rate->aop_ded_2; }
                elseif  ($file->aop_ded == '3') { 
                    'aop_ded' => $rate->aop_ded_3; }
                elseif  ($file->aop_ded == '4') { 
                    'aop_ded' => $rate->aop_ded_4; }
                elseif  ($file->aop_ded == '5') { 
                    'aop_ded' => $rate->aop_ded_5; }

                if($file->construction_type == 'frame') { 
                    'construction_type' == $rate->frame; }    
                elseif  ($file->construction_type == 'jm') { 
                    'construction_type' => $rate->jm; }
                elseif  ($file->construction_type == 'bv') { 
                    'construction_type' => $rate->bv; }
                elseif  ($file->construction_type == 'masonry') { 
                    'construction_type' => $rate->masonry; }

                if($file->protection_class == '1') { 
                    'protection_class' == $rate->protection_class_1; }    
                elseif  ($file->protection_class == '2') { 
                    'protection_class' => $rate->protection_class_2; }
                elseif  ($file->protection_class == '3') { 
                    'protection_class' => $rate->protection_class_3; }
                elseif  ($file->protection_class == '4') { 
                    'protection_class' => $rate->protection_class_4; }
                elseif  ($file->protection_class == '5') { 
                    'protection_class' => $rate->protection_class_5; }

                if($file->new_purchase == '1') { 
                    'new_purchase' == $rate->new_purchase; }                     

                if($file->prior_carrier == '1') { 
                    'prior_carrier' == $rate->prior_carrier; }

                if($file->prior_carrier_name == '1') { 
                    'prior_carrier_name' == $rate->prior_carrier_name; }

                if($file->zero_two_losses == '1') { 
                    'zero_two_losses' == $rate->zero_two_losses; }

                if($file->more_than_two_losses == '1') { 
                    'more_than_two_losses' == $rate->more_than_two_losses; }

                'inspection_fee' => $request->inspection_fee,
                'brokerage_fee' => $request->brokerage_fee,
                'agency_fee' => $request->agency_fee,


                      ]);          
                }

        return view('/rater/rw',[
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
