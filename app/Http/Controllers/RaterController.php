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
use App\LogActivity;
/* USED FOR GENERATING RATING WORKSHEETS AND CALCULATING PREMIUM */

class RaterController extends Controller
{
	/* CHECK FOR ACCUARACY OF INFO AND IF NEEDED AMEND LIMITS/COVERAGES */
    public function index($id) {

        $file = File::findOrFail($id); 

    	return view('/rater/prepare',[
    		'file' => $file,
            'lob' => $this->lob
    	]);
    }
        /* ENTER RW COEFICIENTS IN DB */
        /* SHOW LIMITS AND COEFICIENTS THAT WILL BE APPLIED WITH LIMITS GIVEN */
    public function create($id) {

        // file we are currently rating
        $file = DB::table('files')->where('id',$id)->first(); 

        // finding rates that should be applied, since different rates will apply to different lob
        $rate = DB::table('rates')->where('lob', $file->lob)->first();

        if ($rate == null) {

            return view('/rater/rates_not_found'); 
        } 
            else 

        {
            // getting coeficients that will be used for rating
            $lob = null;
            $cov_a  = null;
            $other_structures = null;
            $loss_of_use = null;
            $med_pay_rate = null;
            $aop_ded_rate = null;
            $construction_type_rate = null;
            $protection_class_rate = '1';
            $new_purchase_rate = null;
            $email_address = null;
            $prior_carrier_rate = null;
            $prior_carrier_name_rate = null;
            $zero_two_losses_rate = null;
            $more_than_two_losses = null;
            $inspection_fee = null;
            $brokerage_fee = null;
            $agency_fee = null;
            $file_id = $file->id;

            if($file->med_pay == '1000') {
                     $med_pay_rate = $rate->med_pay_1k;
            }  elseif  ($file->med_pay == '2500' ) { 
                    $med_pay_rate = $rate->med_pay_2_5k; 
            }   elseif ($file->med_pay == '5000') {
                    $med_pay_rate = $rate->med_pay_5k; }

            if($file->aop_ded == '1') { 
                    $aop_ded_rate = $rate->aop_ded_1; }    
                elseif  ($file->aop_ded == '2') { 
                     $aop_ded_rate = $rate->aop_ded_2; }
                elseif  ($file->aop_ded == '3') { 
                     $aop_ded_rate = $rate->aop_ded_3; }
                elseif  ($file->aop_ded == '4') { 
                     $aop_ded_rate = $rate->aop_ded_4; }
                elseif  ($file->aop_ded == '5') { 
                     $aop_ded_rate = $rate->aop_ded_5; }

            if($file->construction_type == 'frame') { 
                $construction_type_rate == $rate->frame; 
            }    
                elseif  ($file->construction_type == 'jm') { 
                    $construction_type_rate = $rate->jm; 
            }
                elseif  ($file->construction_type == 'bv') { 
                    $construction_type_rate = $rate->bv; 
            }
                elseif  ($file->construction_type == 'masonry') { 
                    $construction_type_rate = $rate->masonry; 
            }

            if($file->protection_class == '1') { 
                $protection_class_rate == $rate->protection_class_1; }    
                elseif  ($file->protection_class == '2') { 
                    $protection_class_rate = $rate->protection_class_2; }
                elseif  ($file->protection_class == '3') { 
                    $protection_class_rate = $rate->protection_class_3; }
                elseif  ($file->protection_class == '4') { 
                    $protection_class_rate = $rate->protection_class_4; }
                elseif  ($file->protection_class == '5') { 
                    $protection_class_rate = $rate->protection_class_5; }

            if($file->new_purchase == '1') { 
                $new_purchase_rate == $rate->new_purchase; }                     

            if($file->prior_carrier == '1') { 
                $prior_carrier_rate == $rate->prior_carrier; }

            if($file->prior_carrier_name == '1') { 
                $prior_carrier_name_rate == $rate->prior_carrier_name; }

            if($file->zero_two_losses == '1') { 
                $zero_two_losses_rate == $rate->zero_two_losses; }

            if($file->zero_two_losses == '1') { 
                $zero_two_losses_rate == $rate->more_than_two_losses; }

            if(isset($request->inspection_fee)) {
                $inspection_fee = $request->inspection_fee;
            } else {
                $inspection_fee = '0';
            }

            if(isset($request->brokerage_fee)) {
                $brokerage_fee = $request->brokerage_fee;
            } else {
                $brokerage_fee = '0';
            }

            if(isset($request->agency_fee)) {
                $agency_fee = $request->agency_fee;
            } else {
                $agency_fee = '0';
            }

            $rater = Rater::create([    
                    'lob' => $file->lob,       
                    'file_id' => $file_id,
                    'general_rate' => $rate->general_rate,
                    'cov_a' => $rate->cov_a,
                    'other_structures' => $rate->other_structures,
                    'loss_of_use' => $rate->loss_of_use,
                    'med_pay' => $med_pay_rate,
                    'aop_ded' => $aop_ded_rate,
                    'construction_type' => '1',
                    'new_purchase' => '1',
                    'prior_carrier' => $prior_carrier_rate,
                    'prior_carrier_name' => $prior_carrier_name_rate,
                    'zero_two_losses' => $zero_two_losses_rate,
                    'more_than_two_losses' => $more_than_two_losses, 
                    'protection_class' => $protection_class_rate,
                    'inspection_fee' => $inspection_fee,
                    'brokerage_fee' => $brokerage_fee,
                    'agency_fee' => $agency_fee

                          ]);                      

            return view('/rater/rw_preview',[
                'file' => $file,
                'rater' => $rater
            ]);

  
    }
 }
    /* CREATE RATING WORKESHEET, SAVE IT TO PDF, SEND PDF TO AGENT AND ATTACH IN FILE/ATTACHMENTS  */
    public function store($file_id, $rater_id) {

        $file = DB::table('files')->where('id',$file_id)->first(); 
        $rater = DB::table('raters')->where('lob', $file->lob)->first();

        $cov_limits = $file->cov_a + $file->other_structures + $file->loss_of_use;
        $cov_limits_rate = ($rater->cov_a + $rater->other_structures + $rater->loss_of_use) / 3;

        $other_rater = ($rater->aop_ded + 
                        $rater->protection_class +
                        $rater->new_purchase +
                        $rater->prior_carrier +
                        $rater->prior_carrier_name) / 5;

        $calc = ($cov_limits/$cov_limits_rate)*$other_rater;

        $tax = $calc * 0.04;
        $empa = $calc * 0.02;

        $premium = Premium::create([
            'grand_premium' => $calc,
            'surplus_lines_tax_fee' => $tax,
            'file_id' => $file->id,
            'empa' => $empa
         ]);

        $file->status = 'rated';

        LogActivity::addToLog('generated rw premium/file id' . $premium->id . $file->id);

    	return view('/rater/rw',[
            'file' => $file,
            'rater' => $rater,
            'premium' => $premium
        ]);
    }

}
